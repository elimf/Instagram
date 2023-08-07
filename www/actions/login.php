<?php 
session_start();

require_once __DIR__.'/../../src/database/db.php'; 


if( empty($_POST['email']) || empty( $_POST['password']) ){
    $_SESSION['login_error'] = $_POST['email'].$_POST['password'];
    header("Location: https://elimf.alwaysdata.net ");
    die();
}
$email =filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
if($email == false){
    $_SESSION['login_error']= "ERROR LOGIN :Please enter a valid email.";
    header("Location: https://elimf.alwaysdata.net ");
    die();
}
$password = hash('sha256',$_POST['password']);

$sql = 'SELECT * FROM users WHERE email = :email';
$query = $db->prepare($sql);

$query->execute([
	':email' => $email
]);
$data = $query->fetch(PDO::FETCH_ASSOC);

if (!$data) {
    $_SESSION['login_error']= "ERROR LOGIN : The email is not linked to any account.";
    header("Location: https://elimf.alwaysdata.net ");
    die();
}
$sql = 'SELECT * FROM users WHERE email = :email';
$query = $db->prepare($sql);

$query->execute([
	':email' => $email
]);
$data = $query->fetch(PDO::FETCH_ASSOC);

if($data["password"] != $password){
   $_SESSION['login_error']= "ERROR LOGIN : Wrong password";
    header("Location: https://elimf.alwaysdata.net ");
    
}else{
    $_SESSION['user']= $data;
    //var_dump( $_SESSION['user']);
    header("Location: https://elimf.alwaysdata.net/?Home ");
}

 