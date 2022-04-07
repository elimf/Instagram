<?php
session_start();
require_once __DIR__.'/../../src/db.php'; 

if( empty($_POST['name']) || empty( $_POST['email']) || empty( $_POST['password']) ){
    $_SESSION['signup_error']= "ERROR SIGNUP : Please fill in all fields.";
    header("Location: http://127.0.0.1:12001/Main ");
    die();
}

if(!ctype_alnum($_POST['name'])){
$_SESSION['signup_error']= "ERROR SIGNUP : Pseudo invalid";
header("Location: http://127.0.0.1:12001/Main ");
die();
}

$email =filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
if($email == false){
    $_SESSION['signup_error']= "ERROR SIGNUP : Please enter a valid email.";
    header("Location: http://127.0.0.1:12001/Main ");
    die();
}
$password = hash('sha256',$_POST['password']);

$sql = 'SELECT * FROM users WHERE email = :email OR pseudo = :pseudo';
$query = $db->prepare($sql);

$query->execute([
	':email' => $email,
    ':pseudo' => $_POST['name']
]);
$data = $query->fetch(PDO::FETCH_ASSOC);

if ($data) {
    $_SESSION['signup_error']= "ERROR SIGNUP : Email already used";
    header("Location: http://127.0.0.1:12001/Main ");
    die();
}
$sql = 'INSERT INTO users(email, pseudo, password,roles) VALUES (:email, :pseudo, :password,:proprietaire)';
$query = $db->prepare($sql);
$query->execute([
	':email' => $email,
	':pseudo' => $_POST['name'],
	':password' => $password,
    ':roles' => 'users'
]);
$data = $query->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['signup_valid']="Congratulations welcome among us";
header("Location:http://127.0.0.1:12001/Main");



    