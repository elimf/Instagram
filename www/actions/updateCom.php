<?php
session_start();

require_once __DIR__ . '/../../src/db.php';

if (!empty($_POST["com"]) || !empty($_POST["id"])) {
    $sql = 'UPDATE comment set contenuCom =:contenu WHERE idComment =:idCom';
    $query = $db->prepare($sql);
    $query->execute([
        ':contenu' => $_POST["com"],
        ':idCom' => $_POST["id"]
    ]);

    header("Location: https://elimf.alwaysdata.net/?Home");
    die();
}
