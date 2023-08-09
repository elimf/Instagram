<?php
session_start();
require_once __DIR__ . '/../../src/database/db.php';

if (!empty($_POST['post_id'])) {
    $sql = 'SELECT id_like FROM likes where publication_id = :publication_id AND user_id= :user_id';
    $query = $db->prepare($sql);
    $query->execute([
        ':publication_id' => $_POST['post_id'],
        ':user_id' => $_SESSION['user']['id_user']
    ]);
    $check = $query->fetch(PDO::FETCH_ASSOC);
    if ($check) {
        //Supression du Like si il existe déja
        $sql = 'DELETE FROM likes WHERE publication_id = :publication_id AND user_id = :user_id ';
        $query = $db->prepare($sql);
        $query->execute([
            ':publication_id' => $_POST['post_id'],
            ':user_id' => $_SESSION['user']['id_user']
        ]);

        header("Location:" . $_ENV['url'] . "/?Home");
        die();
    } else {
        //Ajout des likes
        $sql = 'INSERT INTO likes (publication_id,user_id) VALUES (:publication_id,:user_id)';
        $query = $db->prepare($sql);
        $query->execute([
            ':publication_id' => $_POST['post_id'],
            ':user_id' => $_SESSION['user']['id_user']
        ]);
    }

    header("Location:" . $_ENV['url'] . "/?Home");
    die();
}
