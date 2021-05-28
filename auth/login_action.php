<?php
session_start();

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (! ($email && $password)) {
    header('Location: ../login.php?error=1');
    exit();
}

$_SESSION['email'] = $email;
header('Location: ../admin/home.php');
exit;