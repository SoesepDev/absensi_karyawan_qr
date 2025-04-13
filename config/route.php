<?php

$folder = 'pages';
$apiFolder = 'api';

$page = $_GET['page'] ?? '';
$api = $_GET['api'] ?? '';

if ($api !== '') {
    $parts = explode("-", $api);
    $path = $apiFolder;

    for ($i = 0; $i < count($parts) - 1; $i++) {
        $path .= '/' . $parts[$i];
    }

    $file = $parts[count($parts) - 1];
    $apiPath = "$path/$file.php";

    if (file_exists($apiPath)) {
        include $apiPath;
    } else {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'API endpoint not found'
        ]);
    }

    exit;
}

if ($page !== '') {
    $parts = explode("-", $page);
    $path = $folder;

    for ($i = 0; $i < count($parts) - 1; $i++) {
        $path .= "/" . $parts[$i];
    }

    $file = $parts[count($parts) - 1];
    $fullPath = "$path/$file.php";
    $indexPath = "$path/$file/index.php";

    if (file_exists($fullPath)) {
        include $fullPath;
    } elseif (file_exists($indexPath)) {
        include $indexPath;
    } else {
        include "$folder/404.php";
    }
} else {
    include "$folder/auth/login.php";
}

include "layouts/$layout.php";