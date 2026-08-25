<?php
require_once __DIR__ . '/../config.php';

if (!defined('CAPTCHA_SECRET')) {
    define('CAPTCHA_SECRET', env('CONTACT_FORM_SECRET_KEY', 'webwiders_secure_api_token_2026_x9z'));
}

/**
 * Generate a new Math CAPTCHA question and encrypted token
 */
function generate_captcha(): array {
    $num1 = rand(1, 9);
    $num2 = rand(1, 9);
    $answer = (string)($num1 + $num2);
    $nonce = bin2hex(random_bytes(8));
    $hash = hash_hmac('sha256', $nonce . ':' . $answer, CAPTCHA_SECRET);
    $token = base64_encode($nonce . ':' . $hash);

    return [
        'question' => "{$num1} + {$num2} = ?",
        'token'    => $token
    ];
}

/**
 * Verify user's CAPTCHA answer against the token
 */
function verify_captcha(?string $userAnswer, ?string $token): bool {
    if ($userAnswer === null || $token === null || trim($userAnswer) === '' || trim($token) === '') {
        return false;
    }

    $decoded = base64_decode(trim($token), true);
    if (!$decoded || strpos($decoded, ':') === false) {
        return false;
    }

    list($nonce, $hash) = explode(':', $decoded, 2);
    $expectedHash = hash_hmac('sha256', $nonce . ':' . trim($userAnswer), CAPTCHA_SECRET);

    return hash_equals($expectedHash, $hash);
}

/**
 * Render ultra-clean, minimal HTML for Math CAPTCHA matching existing form styles
 */
function render_captcha_html(): void {
    $captcha = generate_captcha();
    ?>
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
