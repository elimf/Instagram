<?php
session_start();

require_once __DIR__ . '/../../src/db.php';
if (!empty($_POST['idCom'])) {
    $sql = 'DELETE FROM comment WHERE idComment = :idCom ';
    $query = $db->prepare($sql);
    $query->execute([
        ":idCom" => $_POST['idCom']
    ]);
    $_SESSION['delete'] = "You deleted a comment";
    header("Location: https://elimf.alwaysdata.net/?Home");
}
