<?php
session_start();

require_once __DIR__ . '/../../src/database/db.php';

if ( empty($_POST["post_picture"])) {
    $_SESSION['post_error'] = "Need a picture!";
    header("Location: " . $_ENV['url'] . "/?Create ");
    die();
}
$sql = 'INSERT INTO publication(legende, user_id, url_publication,location) VALUES (:legende, :user_id, :url_publication,:location)';
$query = $db->prepare($sql);
$query->execute([
    ':legende' => $_POST["post_caption"],
    ':user_id' => $_SESSION['user']['id_user'],
    ':url_publication' => $_POST["post_picture"],
    'location' => $_POST["post_location"],
]);

header("Location:" . $_ENV['url'] . "/?Home");
