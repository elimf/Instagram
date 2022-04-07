<?php
    session_start();
    require_once __DIR__.'/../../src/db.php'; 

    if(!empty($_POST['val']) || !empty($_POST['idPost'])) {
        $sql='SELECT idlikes FROM likes where idPost = :idPost AND id= :id';
        $query = $db->prepare($sql);
        $query->execute([
                ':idPost' => $_POST['idPost'],
                ':id' => $_SESSION['user']['id']
            ]);
            $check = $query->fetch(PDO::FETCH_ASSOC);
            if ($check) {
                //Supression du Like si il existe déja
                    $sql ='DELETE FROM likes WHERE idPost = :idPost AND id = :id ';
                    $query = $db->prepare($sql);
                    $query->execute([
                        ':idPost' => $_POST['idPost'],
                        ':id'=> $_SESSION['user']['id']
                    ]);
                //Nombre total de likes pour un post
                    $sql='SELECT COUNT(likes.idLikes) FROM `likes` WHERE idPost = :idPost ';
                    $query = $db->prepare($sql);
                    $query->execute([
                        ':idPost' => $_POST['idPost']
                    ]);
                    $nbLike= $query->fetchAll(PDO::FETCH_ASSOC);
                //Mise a jour des likes
                    $sql ='UPDATE post set likes = :likes WHERE idPost = :idPost';
                    $query = $db->prepare($sql);
                    $query->execute([
                            ':likes' => $nbLike[0]["COUNT(likes.idLikes)"],
                        ':idPost'=> $_POST['idPost']
                    ]);
                    
                header("Location: http://127.0.0.1:12001/Home");
                die();
            }else{
                 //Ajout des likes
                    $sql = 'INSERT INTO likes (idPost,id) VALUES (:idPost,:id)';
                    $query = $db->prepare($sql);
                    $query->execute([
                    ':idPost' => $_POST['idPost'],
                    ':id'=> $_SESSION['user']['id']
                ]);
                //Nombre total de likes pour un post
                $sql='SELECT COUNT(likes.idLikes) FROM `likes` WHERE idPost = :idPost ';
                $query = $db->prepare($sql);
                $query->execute([
                    ':idPost' => $_POST['idPost']
                ]);
                $nbLike= $query->fetchAll(PDO::FETCH_ASSOC);
            
                //Mise a jour des likes
                $sql ='UPDATE post set likes = :likes WHERE idPost = :idPost';
                $query = $db->prepare($sql);
                $query->execute([
                        ':likes' => $nbLike[0]["COUNT(likes.idLikes)"],
                        ':idPost'=> $_POST['idPost']
                    ]);
            }

        header("Location: http://127.0.0.1:12001/Home");
        die();
      
    }