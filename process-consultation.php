<?php
require_once __DIR__ . '/config.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method Not Allowed. Please submit the consultation booking form.'
    ]);
    exit;
}

// 1. Capture Form Inputs
$firstName     = isset($_POST['first_name']) ? trim($_POST['first_name']) : '';
$lastName      = isset($_POST['last_name']) ? trim($_POST['last_name']) : '';
$fullName      = trim($firstName . ' ' . $lastName);
$email         = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone         = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$company       = isset($_POST['company']) ? trim($_POST['company']) : 'N/A';
$primaryGoal   = isset($_POST['primary_goal']) ? trim($_POST['primary_goal']) : 'N/A';
$preferredDate = isset($_POST['preferred_date']) ? trim($_POST['preferred_date']) : 'N/A';
$preferredTime = isset($_POST['preferred_time']) ? trim($_POST['preferred_time']) : 'N/A';
$message       = isset($_POST['message']) ? trim($_POST['message']) : '';

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

// 3. Construct Payload
$messageContent = "CONSULTATION CALL BOOKING DETAILS:\n"
    . "------------------------------------\n"
    . "Client Name: " . $fullName . "\n"
    . "Work Email: " . $email . "\n"
    . "Phone Number: " . $phone . "\n"
    . "Company Name: " . $company . "\n"
    . "Primary Goal: " . $primaryGoal . "\n"
    . "Preferred Date: " . $preferredDate . "\n"
    . "Preferred Time Slot: " . $preferredTime . "\n"
    . "Discussion Notes / Message:\n" . ($message !== '' ? $message : 'None provided.');

$payload = [
    'name'    => $fullName,
    'email'   => $email,
    'number'  => $phone,
    'message' => $messageContent
];

$adminUrl  = rtrim(env('ADMIN_URL', 'http://localhost/adminwebwider/'), '/');
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
    $isLocal = (in_array($_SERVER['REMOTE_ADDR'] ?? '', ['127.0.0.1', '::1']) || strpos($_SERVER['HTTP_HOST'] ?? '', 'localhost') !== false);
    
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL            => $apiUrl,
        CURLOPT_POST           => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_POSTFIELDS     => json_encode($payload),
        CURLOPT_TIMEOUT        => 15,
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
