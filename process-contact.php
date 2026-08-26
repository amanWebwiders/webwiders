<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/captcha-helper.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method Not Allowed. Please submit the form.'
    ]);
    exit;
}

// 0. Invisible Honeypot Trap Check (Silent Drop for AI Bots)
if (!empty($_POST['website_url_check'])) {
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your message has been received successfully.'
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

// 1. Capture Form Data
$firstName = isset($_POST['first-name']) ? trim($_POST['first-name']) : '';
$lastName  = isset($_POST['last-name']) ? trim($_POST['last-name']) : '';
$fullName  = isset($_POST['name']) ? trim($_POST['name']) : trim($firstName . ' ' . $lastName);
$email     = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone     = isset($_POST['number']) ? trim($_POST['number']) : (isset($_POST['phone']) ? trim($_POST['phone']) : '');
$message   = isset($_POST['message']) ? trim($_POST['message']) : '';

// 2. Validation
if (empty($fullName)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter your name.']);
    exit;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please provide a valid email address.']);
    exit;
}

if (empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter your message.']);
    exit;
}

// 2.1 Spam Link / Cyrillic Bot Filtering
if (is_spam_content($fullName . ' ' . $message . ' ' . $email)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Your message contained invalid content or links and could not be sent.'
    ]);
    exit;
}

$productName = isset($_POST['product_name']) && !empty(trim($_POST['product_name'])) ? trim($_POST['product_name']) : (isset($_POST['subject']) ? trim($_POST['subject']) : '');

if (empty($productName) && isset($_SERVER['HTTP_REFERER'])) {
    $refererPath = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
    $pageName = basename($refererPath, '.php');
    if (!empty($pageName) && $pageName !== 'index') {
        $productName = ucwords(str_replace(['-', '_'], ' ', $pageName));
    }
}

if (!empty($productName)) {
    $formattedMessage = "CONTACT INQUIRY FOR: " . $productName . "\n"
        . "------------------------------------\n"
        . "Client Name: " . $fullName . "\n"
        . "Email: " . $email . "\n"
        . "Phone: " . ($phone !== '' ? $phone : 'N/A') . "\n\n"
        . "Message:\n" . $message;
} else {
    $formattedMessage = $message;
}

// 3. Extract Real Client IP (Fixes 192.185.129.5 cPanel IP issue)
$clientIp = get_real_client_ip();

// 4. Prepare Payload with Real Visitor IP
$payload = [
    'name'         => $fullName,
    'email'        => $email,
    'number'       => $phone,
    'phone'        => $phone,
    'product_name' => !empty($productName) ? $productName : 'General Contact Form',
    'message'      => $formattedMessage,
    'user_ip'      => $clientIp,
    'client_ip'    => $clientIp
];

$isLocal = (in_array($_SERVER['REMOTE_ADDR'] ?? '', ['127.0.0.1', '::1']) || strpos($_SERVER['HTTP_HOST'] ?? '', 'localhost') !== false);
$defaultAdminUrl = $isLocal ? 'http://localhost/adminwebwider/' : 'https://manage.webwiders.com/';
$adminUrl  = rtrim(env('ADMIN_URL', $defaultAdminUrl), '/');
$apiUrl    = env('ADMIN_MAIL_API_URL', $adminUrl . '/api/send-contact-email');
$secretKey = env('CONTACT_FORM_SECRET_KEY', 'webwiders_secure_api_token_2026_x9z');

// 5. Time-based HMAC SHA-256 Payload Signature
$rawBody   = json_encode($payload);
$timestamp = (string)time();
$nonce     = bin2hex(random_bytes(16));
$signature = hash_hmac('sha256', $timestamp . '.' . $nonce . '.' . $rawBody, $secretKey);

$headers = [
    'Content-Type: application/json',
    'Accept: application/json',
    'X-API-KEY: ' . $secretKey,
    'X-Timestamp: ' . $timestamp,
    'X-Nonce: ' . $nonce,
    'X-Signature: ' . $signature
];

$responseJson = null;
$httpCode     = 500;
$requestError = null;

// 6. Dual Transport Handler (cURL with fallback to file_get_contents)
if (function_exists('curl_init')) {
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL            => $apiUrl,
        CURLOPT_POST           => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_POSTFIELDS     => $rawBody,
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
            'content' => $rawBody,
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
        'message' => 'Thank you! Your message has been sent successfully.'
    ]);
} else {
    http_response_code($httpCode >= 400 ? $httpCode : 500);
    $errorMessage = $responseData['message'] ?? 'Failed to send message. Please try again later.';
    echo json_encode([
        'success' => false,
        'message' => $errorMessage
    ]);
}
