<?php
session_start();

require_once __DIR__ . '/../../src/db.php';

if (empty($_POST['idPost']) || empty($_POST['comment'])) {
    $_SESSION['comment_error'] = "You can’t have empty comments try again.";
    header("Location: https://elimf.alwaysdata.net/?Home ");
    die();
}
$sql = 'INSERT INTO comment(contenuCom, idPost,id) VALUES (:contenu, :post, :id)';
$query = $db->prepare($sql);
$query->execute([
    ':contenu' => $_POST['comment'],
    ':post' => $_POST['idPost'],
    ':id' => $_SESSION['user']['id']

]);


header("Location: https://elimf.alwaysdata.net/?Home ");
