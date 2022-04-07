<?php 
session_start();

require_once __DIR__.'/../../src/db.php'; 
if(!empty($_POST['contenu']) || !empty($_POST['idCom'])){
    
 $_SESSION['upd']=array($_POST['contenu'],$_POST['idCom'],$_POST['tag'],$_POST['id']);
    var_dump($_SESSION['upd']);
    header("Location: http://127.0.0.1:12001/UpdateCom");
    die();
}
