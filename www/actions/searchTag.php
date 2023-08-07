<?php
session_start();

require_once __DIR__ . '/../../src/database/db.php';

if (!empty($_POST['tag'])) {
    $sql = 'SELECT url, contenu,likes,idPost,users.pseudo,tag FROM post,users WHERE post.id = users.id AND tag = :tag';
    $query = $db->prepare($sql);
    $tag = strtolower($_POST['tag']);
    $query->execute([
        ':tag' => $tag
    ]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['list'] = $data;
    $_SESSION['search'] = $_POST['tag'];
    header("Location: http://127.0.0.1:12001/Search");
    die();
}
$_SESSION['list'] = array();
$_SESSION['search_error'] = "sorry your search failed";
header("Location: http://127.0.0.1:12001/Search");
