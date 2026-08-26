<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/captcha-helper.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method Not Allowed. Please submit the consultation booking form.'
    ]);
    exit;
}

// 0. Invisible Honeypot Trap Check (Silent Drop for AI Bots)
if (!empty($_POST['website_url_check'])) {
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your 30-minute consultation call session has been booked successfully.'
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

// 1. Capture Form Inputs with robust fallbacks
$firstName     = isset($_POST['first_name']) ? trim($_POST['first_name']) : (isset($_POST['first-name']) ? trim($_POST['first-name']) : (isset($_POST['fname']) ? trim($_POST['fname']) : ''));
$lastName      = isset($_POST['last_name']) ? trim($_POST['last_name']) : (isset($_POST['last-name']) ? trim($_POST['last-name']) : (isset($_POST['lname']) ? trim($_POST['lname']) : ''));
$fullName      = trim($firstName . ' ' . $lastName);

if (empty($fullName) && isset($_POST['name'])) {
    $fullName  = trim($_POST['name']);
}

$email         = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone         = isset($_POST['phone']) ? trim($_POST['phone']) : (isset($_POST['number']) ? trim($_POST['number']) : (isset($_POST['contact']) ? trim($_POST['contact']) : ''));
$company       = isset($_POST['company']) ? trim($_POST['company']) : 'N/A';
$primaryGoal   = isset($_POST['primary_goal']) ? trim($_POST['primary_goal']) : 'N/A';
$preferredDate = isset($_POST['preferred_date']) ? trim($_POST['preferred_date']) : 'N/A';
$preferredTime = isset($_POST['preferred_time']) ? trim($_POST['preferred_time']) : 'N/A';
$message       = isset($_POST['message']) ? trim($_POST['message']) : '';
$productName   = isset($_POST['product_name']) && !empty(trim($_POST['product_name'])) ? trim($_POST['product_name']) : (isset($_POST['product']) ? trim($_POST['product']) : '');

if (empty($productName) && isset($_SERVER['HTTP_REFERER'])) {
    $refererPath = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
    $pageName = basename($refererPath, '.php');
    if (!empty($pageName) && $pageName !== 'index') {
        $productName = ucwords(str_replace(['-', '_'], ' ', $pageName));
    }
}
if (empty($productName)) {
    $productName = 'General Consultation';
}

// 2. Validation
if (empty($fullName) || empty($email) || empty($phone)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Please fill in all required fields (Name, Email, Phone).'
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

// 2.1 Spam Link / Cyrillic Bot Filtering
if (is_spam_content($fullName . ' ' . $message . ' ' . $email . ' ' . $company)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Your submission contained invalid content or links and could not be sent.'
    ]);
    exit;
}

// 3. Construct Payload
$messageContent = "CONSULTATION CALL BOOKING DETAILS:\n"
    . "------------------------------------\n"
    . "Product / Service: " . $productName . "\n"
    . "Client Name: " . $fullName . "\n"
    . "Work Email: " . $email . "\n"
    . "Phone Number: " . $phone . "\n"
    . "Company Name: " . $company . "\n"
    . "Primary Goal: " . $primaryGoal . "\n"
    . "Preferred Date: " . $preferredDate . "\n"
    . "Preferred Time Slot: " . $preferredTime . "\n\n"
    . "Discussion Notes / Message:\n" . ($message !== '' ? $message : 'None provided.');

// Extract Real Client IP (Fixes 192.185.129.5 cPanel IP issue)
$clientIp = get_real_client_ip();

$payload = [
    'name'         => $fullName,
    'email'        => $email,
    'number'       => $phone,
    'phone'        => $phone,
    'product_name' => $productName,
    'message'      => $messageContent,
    'user_ip'      => $clientIp,
    'client_ip'    => $clientIp
];

$isLocal = (in_array($_SERVER['REMOTE_ADDR'] ?? '', ['127.0.0.1', '::1']) || strpos($_SERVER['HTTP_HOST'] ?? '', 'localhost') !== false);
$defaultAdminUrl = $isLocal ? 'http://localhost/adminwebwider/' : 'https://manage.webwiders.com/';
$adminUrl  = rtrim(env('ADMIN_URL', $defaultAdminUrl), '/');
$apiUrl    = env('ADMIN_MAIL_API_URL', $adminUrl . '/api/send-contact-email');
$secretKey = env('CONTACT_FORM_SECRET_KEY', 'webwiders_secure_api_token_2026_x9z');

// Time-based HMAC SHA-256 Payload Signature
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
        'message' => 'Thank you! Your 30-minute consultation call session has been booked successfully. Our team will contact you.'
    ]);
} else {
    http_response_code($httpCode >= 400 ? $httpCode : 500);
    $errorMessage = $responseData['message'] ?? 'Failed to book consultation session. Please try again later.';
    echo json_encode([
        'success' => false,
        'message' => $errorMessage
    ]);
}
