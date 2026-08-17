<?php
// Show errors during development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * -------------------------------------------------
 * BASE PATH (Filesystem) – for PHP includes
 * Example: G:/xampp/htdocs/webwiders/
 * -------------------------------------------------
 */
define('BASE_PATH', realpath(__DIR__) . DIRECTORY_SEPARATOR);

/**
 * -------------------------------------------------
 * BASE URL – for browser links
 * Example: http://localhost/webwiders/
 * -------------------------------------------------
 */
define('BASE_URL', (function () {
    $scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $dir = str_replace('\\', '/', dirname($scriptName));
    $dir = rtrim($dir, '/');
    if ($dir === '/' || $dir === '.') {
        $dir = '';
    }
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
if (!function_exists('url')) {
    function url(string $path = ''): string {
        return rtrim(BASE_URL, '/') . '/' . ltrim($path, '/');
    }
}

// Database Connection & Helper Load
require_once __DIR__ . '/db.php';
