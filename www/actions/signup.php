<?php
session_start();
require_once __DIR__ . '/../../src/database/db.php';

if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']|| empty($_POST['fullname']))) {
    $_SESSION['signup_error'] = "ERROR SIGNUP : Please fill in all fields.";
    header("Location: https://elimf.alwaysdata.net/?register ");
    die();
}

if (!ctype_alnum($_POST['username'])) {
    $_SESSION['signup_error'] = "ERROR SIGNUP : Pseudo invalid";
    header("Location: https://elimf.alwaysdata.net/?register ");
    die();
}

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if ($email == false) {
    $_SESSION['signup_error'] = "ERROR SIGNUP : Please enter a valid email.";
    header("Location: https://elimf.alwaysdata.net/?register ");
    die();
}
$password = hash('sha256', $_POST['password']);

$sql = 'SELECT * FROM users WHERE email = :email OR pseudo = :pseudo';
$query = $db->prepare($sql);

$query->execute([
    ':email' => $email,
    ':pseudo' => $_POST['name'],
]);
$data = $query->fetch(PDO::FETCH_ASSOC);

if ($data) {
    $_SESSION['signup_error'] = "ERROR SIGNUP : Email already used";
    header("Location: https://elimf.alwaysdata.net/?register ");
    die();
}
$sql = 'INSERT INTO users(email, pseudo,fullname, password,roles) VALUES (:email, :pseudo,:fullname :password,:roles)';
$query = $db->prepare($sql);
$query->execute([
    'email' => $email,
    'pseudo' => $_POST['username'],
    'fullname' => $_POST['fullname'],
    'password' => $password,
    'roles' => 'users',
]);
$data = $query->fetchAll();
$_SESSION['signup_valid'] = "Congratulations welcome among us";
header("Location:https://elimf.alwaysdata.net/");

