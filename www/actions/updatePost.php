<?php 
session_start();

require_once __DIR__.'/../../src/db.php'; 

if(empty($_POST["post_title"]) || empty($_POST["post_picture"])) {
        $_SESSION['post_error']= "Need a post!";
        header("Location: http://127.0.0.1:12001/UpdatePost ");
        die();
    }
    $sql = 'UPDATE post set contenu =:contenu, url=:url,tag=:tag WHERE idPost =:id';
    $query = $db->prepare($sql);
    $query->execute([
	    ':contenu' => $_POST["post_title"],
	    ':url' => $_POST["post_picture"],
        ':tag' => $_POST["tag"],
        ':id' => $_POST["id"]
]);

    header("Location: http://127.0.0.1:12001/Home");
