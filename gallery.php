<?php
// Devolve as imagens existentes na pasta de uma edição do ENJE.
// Requer alojamento com PHP. Novas imagens são detetadas sem alterar o JavaScript.
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');

$folder = isset($_GET['folder']) ? $_GET['folder'] : '';
if (!preg_match('/^enje-[0-9]{4}-[0-9]{2}$/', $folder)) {
    http_response_code(400);
    echo json_encode(['images' => [], 'error' => 'Pasta inválida']);
    exit;
}

$base = __DIR__ . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'arquivo-enje';
$dir = $base . DIRECTORY_SEPARATOR . $folder;
if (!is_dir($dir)) {
    echo json_encode(['images' => []]);
    exit;
}

$allowed = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
$files = scandir($dir);
$images = [];
foreach ($files as $file) {
    if ($file === '.' || $file === '..') continue;
    $path = $dir . DIRECTORY_SEPARATOR . $file;
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (is_file($path) && in_array($ext, $allowed, true)) {
        $images[] = 'images/arquivo-enje/' . rawurlencode($folder) . '/' . rawurlencode($file);
    }
}
sort($images, SORT_NATURAL | SORT_FLAG_CASE);
echo json_encode(['images' => $images], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
