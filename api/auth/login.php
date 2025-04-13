<?php
session_start();

$valid_user = 'admin';
$valid_pass = 'admin';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$setcookie = $_POST['setcookie'] ?? false;

if ($username === $valid_user && $password === $valid_pass) {
    $_SESSION['role']     = "admin";
    // $_SESSION['role']     = "operator";
    $_SESSION['username'] = $username;

    if ($setcookie) {
        setcookie('username', $username, time() + (86400 * 30), "/");
    }

    echo json_encode([
        'success' => true,
        'message' => 'Login berhasil',
        'redirect' => '?page=dashboard'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Username atau password salah'
    ]);
}
?>
