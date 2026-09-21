<?php
header('Content-Type: application/json; charset=utf-8');

$name = isset($_GET['name']) ? trim($_GET['name']) : 'World';

echo json_encode([
    'status' => 'success',
    'message' => "Hi there, {$name}!",
    'timestamp' => time()
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
