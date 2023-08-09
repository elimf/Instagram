<?php
session_start();

require_once __DIR__ . '/../../src/database/db.php';

if (empty($_POST["post_title"]) || empty($_POST["post_picture"])) {
    $_SESSION['post_error'] = "Need a post!";
    header("Location: " . $_ENV['url'] . "/?Create ");
    die();
}
$sql = 'INSERT INTO post(contenu, id, url, likes, tag) VALUES (:contenu, :id, :url, :likes, :tag)';
$query = $db->prepare($sql);
$query->execute([
    ':contenu' => $_POST["post_title"],
    ':id' => $_SESSION['user']['id'],
    ':url' => $_POST["post_picture"],
    ':likes' => 0,
    ':tag' => $_POST["tag"]
]);

header("Location:" . $_ENV['url'] . "/?Home");
