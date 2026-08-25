<?php
require_once __DIR__ . '/config.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method Not Allowed. Please submit the application form.'
    ]);
    exit;
}

// 1. Capture Form Inputs
$fullName    = isset($_POST['fname']) ? trim($_POST['fname']) : '';
$email       = isset($_POST['email']) ? trim($_POST['email']) : '';
$contact     = isset($_POST['contact']) ? trim($_POST['contact']) : '';
$designation = isset($_POST['designation']) ? trim($_POST['designation']) : '';
$cctc        = isset($_POST['cctc']) ? trim($_POST['cctc']) : 'N/A';
$ectc        = isset($_POST['ectc']) ? trim($_POST['ectc']) : 'N/A';
$experience  = isset($_POST['experience']) ? trim($_POST['experience']) : 'N/A';

// 2. Validate Required Fields
if (empty($fullName) || empty($email) || empty($contact) || empty($designation)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Please fill in all required fields (Name, Email, Contact, Designation).'
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

// 3. Handle File Upload (Resume Attachment)
$resumeAttachment = null;
if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['resume']['tmp_name'];
    $fileName    = $_FILES['resume']['name'];
    $fileSize    = $_FILES['resume']['size'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $allowedExtensions = ['pdf', 'doc', 'docx'];
    if (!in_array($fileExtension, $allowedExtensions)) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Invalid file format. Only PDF, DOC, and DOCX files are allowed.'
        ]);
        exit;
    }

    if ($fileSize > 5 * 1024 * 1024) { // 5MB Limit
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'File size exceeds maximum limit of 5MB.'
        ]);
        exit;
    }

    $fileData = file_get_contents($fileTmpPath);
    $resumeAttachment = [
        'name'      => $fileName,
        'mime_type' => mime_content_type($fileTmpPath),
        'base64'    => base64_encode($fileData)
    ];
}

// 4. Construct Payload for Laravel API
$messageContent = "JOB APPLICATION DETAILS:\n"
    . "-----------------------------\n"
    . "Position Applied For: " . $designation . "\n"
    . "Candidate Name: " . $fullName . "\n"
    . "Contact Number: " . $contact . "\n"
    . "Experience Level: " . $experience . "\n"
    . "Current CTC: " . $cctc . " LPA\n"
    . "Expected CTC: " . $ectc . " LPA\n";

if ($resumeAttachment) {
    $messageContent .= "Resume Attached: Yes (" . $resumeAttachment['name'] . ")\n";
} else {
    $messageContent .= "Resume Attached: No\n";
}

$payload = [
    'name'       => $fullName,
    'email'      => $email,
    'number'     => $contact,
    'message'    => $messageContent,
    'attachment' => $resumeAttachment
];

// Determine Laravel API URL & Secret Key
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
        CURLOPT_TIMEOUT        => 20,
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
            'timeout' => 20,
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
        'message' => 'Thank you! Your job application has been submitted successfully. Our HR team will contact you.'
    ]);
} else {
    http_response_code($httpCode >= 400 ? $httpCode : 500);
    $errorMessage = $responseData['message'] ?? 'Failed to submit job application. Please try again later.';
    echo json_encode([
        'success' => false,
        'message' => $errorMessage
    ]);
}
