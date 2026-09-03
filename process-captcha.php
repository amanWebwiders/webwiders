<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/captcha-helper.php';

header('Content-Type: application/json; charset=utf-8');

$captcha = generate_captcha();

echo json_encode([
    'success'  => true,
    'question' => $captcha['question'],
    'token'    => $captcha['token']
]);
