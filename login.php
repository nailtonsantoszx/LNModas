<?php
session_start();
if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    header('Location: index.php');
    exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === 'seu-email@exemplo.com' && $password === 'sua-senha-segura') {
        $_SESSION['admin'] = true;
        header('Location: index.php');
        exit();
    } else {
        $
