<?php
// Show errors during development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * -------------------------------------------------
 * BASE PATH (Filesystem) - for PHP includes
 * Example: G:/xampp/htdocs/webwiders/
 * -------------------------------------------------
 */
define('BASE_PATH', realpath(__DIR__) . DIRECTORY_SEPARATOR);

/**
 * -------------------------------------------------
 * BASE URL - for browser links
 * Example: http://localhost/webwiders/
 * -------------------------------------------------
 */
define('BASE_URL', (function () {
    $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
        || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443);
    $scheme = $isHttps ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    // Determine the base path (the directory where the app is served).
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $dir = str_replace('\\', '/', dirname($scriptName));
    $dir = rtrim($dir, '/');
    // If running from document root, $dir may be empty or '/'. Normalize to empty string.
    if ($dir === '/' || $dir === '.' ) {
        $dir = '';
    }
    // Build URL: include directory only if non-empty
    return $scheme . '://' . $host . ($dir !== '' ? $dir : '') . '/';
})());

/**
 * -------------------------------------------------
 * Asset helper
 * Usage: asset('css/style.css')
 * Output: http://localhost/webwiders/assets/css/style.css
 * -------------------------------------------------
 */
if (!function_exists('asset')) {
    function asset(string $path = ''): string {
        return rtrim(BASE_URL, '/') . '/assets/' . ltrim($path, '/');
    }
}

/**
 * -------------------------------------------------
 * URL helper (SEO Friendly Clean URLs)
 * Usage: url('about') or url('services/android-app-development')
 * Output: http://localhost/webwiders/about
 * -------------------------------------------------
 */
if (!function_exists('url')) {
    function url(string $path = ''): string {
        $path = ltrim($path, '/');
        
        // Handle blog-detail query string conversion
        if (preg_match('/^blog-detail\.php\?slug=(.+)$/i', $path, $m)) {
            $path = 'blog-detail/' . $m[1];
        } else {
            // Strip .php extension for clean SEO URLs
            $path = preg_replace('/\.php$/i', '', $path);
            if ($path === 'index') {
                $path = '';
            }
        }
        
        return rtrim(BASE_URL, '/') . ($path !== '' ? '/' . $path : '/');
    }
}

// Database Connection & Helper Load
require_once __DIR__ . '/db.php';
