<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/captcha-helper.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method Not Allowed. Please submit the demo request form.'
    ]);
    exit;
}

// 0. CAPTCHA Validation
$captchaAnswer = $_POST['captcha_answer'] ?? null;
$captchaToken  = $_POST['captcha_token'] ?? null;

if (!verify_captcha($captchaAnswer, $captchaToken)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Security verification failed. Please enter the correct answer for the security code.'
    ]);
    exit;
}

// 1. Capture Form Inputs
$name        = isset($_POST['name']) ? trim($_POST['name']) : (isset($_POST['first_name']) ? trim($_POST['first_name'] . ' ' . ($_POST['last_name'] ?? '')) : '');
$email       = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone       = isset($_POST['phone']) ? trim($_POST['phone']) : (isset($_POST['number']) ? trim($_POST['number']) : (isset($_POST['contact']) ? trim($_POST['contact']) : ''));
if (empty($phone)) {
    $phone = 'N/A';
}
$company     = isset($_POST['company']) ? trim($_POST['company']) : (isset($_POST['hospital']) ? trim($_POST['hospital']) : 'N/A');
$role        = isset($_POST['role']) ? trim($_POST['role']) : 'N/A';
$message     = isset($_POST['message']) ? trim($_POST['message']) : '';
$productName = isset($_POST['product_name']) && !empty(trim($_POST['product_name'])) ? trim($_POST['product_name']) : '';

if (empty($productName) && isset($_SERVER['HTTP_REFERER'])) {
    $refererPath = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
    $pageName = basename($refererPath, '.php');
    if (!empty($pageName) && $pageName !== 'index') {
        $productName = ucwords(str_replace(['-', '_'], ' ', $pageName));
    }
}
if (empty($productName)) {
    $productName = 'Software Solution';
}

// 2. Validation
if (empty($name) || empty($email)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Please fill in all required fields (Name, Email).'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Please provide a valid email address.'
    ]);
    exit;
}

// 3. Construct Payload
$messageContent = "PRODUCT DEMO REQUEST DETAILS:\n"
    . "-----------------------------\n"
    . "Requested Product: " . $productName . "\n"
    . "Client Name: " . $name . "\n"
    . "Work Email: " . $email . "\n"
    . "Phone Number: " . $phone . "\n"
    . "Company / Organization: " . $company . "\n";

if ($role !== 'N/A') {
    $messageContent .= "User Role: " . ucfirst($role) . "\n";
}

$messageContent .= "\nModule Requirements / Notes:\n" . ($message !== '' ? $message : 'None provided.');

$payload = [
    'name'         => $name,
    'email'        => $email,
    'number'       => $phone,
    'phone'        => $phone,
    'product_name' => $productName,
    'message'      => $messageContent
];

$isLocal = (in_array($_SERVER['REMOTE_ADDR'] ?? '', ['127.0.0.1', '::1']) || strpos($_SERVER['HTTP_HOST'] ?? '', 'localhost') !== false);
$defaultAdminUrl = $isLocal ? 'http://localhost/adminwebwider/' : 'https://manage.webwiders.com/';
$adminUrl  = rtrim(env('ADMIN_URL', $defaultAdminUrl), '/');
$apiUrl    = env('ADMIN_MAIL_API_URL', $adminUrl . '/api/send-contact-email');
$secretKey = env('CONTACT_FORM_SECRET_KEY', 'webwiders_secure_api_token_2026_x9z');

$headers = [
    'Content-Type: application/json',
    'Accept: application/json',
    'X-API-KEY: ' . $secretKey
];

$responseJson = null;
$httpCode     = 500;
$requestError = null;

if (function_exists('curl_init')) {
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL            => $apiUrl,
        CURLOPT_POST           => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_POSTFIELDS     => json_encode($payload),
        CURLOPT_TIMEOUT        => 20,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => !$isLocal,
        CURLOPT_SSL_VERIFYHOST => $isLocal ? 0 : 2
    ]);
    
    $responseJson = curl_exec($ch);
    $httpCode     = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $requestError = curl_error($ch);
    curl_close($ch);
} else {
    $context = stream_context_create([
        'http' => [
            'method'  => 'POST',
            'header'  => implode("\r\n", $headers),
            'content' => json_encode($payload),
            'timeout' => 15,
            'ignore_errors' => true
        ],
        'ssl' => [
            'verify_peer'      => false,
            'verify_peer_name' => false
        ]
    ]);

    $responseJson = @file_get_contents($apiUrl, false, $context);

    if (isset($http_response_header) && is_array($http_response_header)) {
        if (preg_match('#HTTP/\d\.\d\s+(\d+)#i', $http_response_header[0], $matches)) {
            $httpCode = intval($matches[1]);
        }
    }

    if ($responseJson === false) {
        $requestError = 'Failed to connect via HTTP stream context.';
    }
}

if ($requestError && !$responseJson) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Unable to connect to mail server: ' . $requestError
    ]);
    exit;
}

$responseData = json_decode($responseJson, true);

if ($httpCode >= 200 && $httpCode < 300 && isset($responseData['success']) && $responseData['success'] === true) {
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your demo request for ' . htmlspecialchars($productName) . ' has been received. Our expert will contact you shortly.'
    ]);
} else {
    http_response_code($httpCode >= 400 ? $httpCode : 500);
    $errorMessage = $responseData['message'] ?? 'Failed to submit demo request. Please try again later.';
    echo json_encode([
        'success' => false,
        'message' => $errorMessage
    ]);
}
