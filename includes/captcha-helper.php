<?php
require_once __DIR__ . '/../config.php';

if (!defined('CAPTCHA_SECRET')) {
    define('CAPTCHA_SECRET', env('CONTACT_FORM_SECRET_KEY', 'webwiders_secure_api_token_2026_x9z'));
}

/**
 * Get real client IP address accounting for Cloudflare, Nginx, and proxies.
 * Prevents recording the cPanel server IP (e.g. 192.185.129.5) every time.
 */
function get_real_client_ip(): string {
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        return trim($_SERVER['HTTP_CF_CONNECTING_IP']);
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        foreach ($ips as $ip) {
            $ip = trim($ip);
            if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                return $ip;
            }
        }
    }

    if (!empty($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)) {
        return trim($_SERVER['HTTP_CLIENT_IP']);
    }

    return $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
}

/**
 * Detect spam links, suspicious TLDs, and Cyrillic bot patterns in submission content
 */
function is_spam_content(string $text): bool {
    if (trim($text) === '') return false;
    $spamPattern = '/(linkspree|bit\.ly|tinyurl|\.ru\/|\.top\/|http:\/\/|https:\/\/|crypto|casino|telegram|\p{Cyrillic})/iu';
    return (bool)preg_match($spamPattern, $text);
}

/**
 * Generate a new Math CAPTCHA question and encrypted token
 */
function generate_captcha(): array {
    $num1 = rand(1, 9);
    $num2 = rand(1, 9);
    $answer = (string)($num1 + $num2);
    $nonce = bin2hex(random_bytes(8));
    $timestamp = time();
    $hash = hash_hmac('sha256', $nonce . ':' . $timestamp . ':' . $answer, CAPTCHA_SECRET);
    $token = base64_encode($nonce . ':' . $timestamp . ':' . $hash);

    return [
        'question' => "{$num1} + {$num2} = ?",
        'token'    => $token
    ];
}

/**
 * Verify user's CAPTCHA answer against the token with expiration check (5 mins)
 */
function verify_captcha(?string $userAnswer, ?string $token): bool {
    if ($userAnswer === null || $token === null || trim($userAnswer) === '' || trim($token) === '') {
        return false;
    }

    $decoded = base64_decode(trim($token), true);
    if (!$decoded || strpos($decoded, ':') === false) {
        return false;
    }

    $parts = explode(':', $decoded);
    if (count($parts) < 3) {
        return false;
    }

    list($nonce, $timestamp, $hash) = $parts;

    // Reject tokens older than 10 minutes (600 seconds)
    if (abs(time() - (int)$timestamp) > 600) {
        return false;
    }

    $expectedHash = hash_hmac('sha256', $nonce . ':' . $timestamp . ':' . trim($userAnswer), CAPTCHA_SECRET);

    return hash_equals($expectedHash, $hash);
}

/**
 * Render ultra-clean, minimal HTML for Math CAPTCHA matching existing form styles
 */
function render_captcha_html(): void {
    $captcha = generate_captcha();
    ?>
    <!-- Invisible Honeypot Trap Field for AI Bots -->
    <div style="position: absolute; left: -9999px; top: -9999px;" aria-hidden="true">
        <input type="text" name="website_url_check" tabindex="-1" autocomplete="off">
    </div>

    <div class="col-12 captcha-container my-2">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 py-1">
            <div class="d-flex align-items-center gap-2">
                <span class="fw-semibold text-dark captcha-question-text" style="font-size: 0.9rem; white-space: nowrap;">
                    <i class="fa-solid fa-shield-cat me-1 text-danger"></i> Verification: <?= htmlspecialchars($captcha['question']) ?>
                </span>
                <button type="button" class="btn btn-sm btn-link p-0 text-muted refresh-captcha-btn" title="Refresh security code" style="font-size: 0.85rem; line-height: 1;">
                    <i class="fa-solid fa-rotate-right"></i>
                </button>
            </div>
            <div class="d-flex align-items-center">
                <input type="hidden" name="captcha_token" class="captcha-token-input" value="<?= htmlspecialchars($captcha['token']) ?>">
                <input type="number" name="captcha_answer" class="form-control captcha-answer-input bg-white" placeholder="Answer*" required min="0" max="99" style="width: 100px; height: 38px; font-size: 0.9rem;">
            </div>
        </div>
    </div>
    <?php
}
