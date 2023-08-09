<?php
session_start();

require_once __DIR__ . '/../../src/database/db.php';
if (!empty($_POST['idPost'])) {
    $sql = 'DELETE FROM publication WHERE id_publication = :idPost ';
    $query = $db->prepare($sql);
    $query->execute([
        ":idPost" => $_POST['idPost']
    ]);
    $_SESSION['delete'] = "You deleted a post";
    header("Location:" . $_ENV['url'] . "/?Home");
}
