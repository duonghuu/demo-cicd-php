<?php
header('Content-Type: application/json; charset=utf-8');

http_response_code(200);
echo json_encode([
    'status' => 'ok',
    'timestamp' => time(),
    'php_version' => PHP_VERSION,
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
