<?php 
$title="Profil";
//Affiche toutes les publications de l'utilisateur connectés    
        $sql = 'SELECT url, contenu,likes,idPost,users.pseudo,tag FROM post,users WHERE users.id = :id AND post.id = users.id ';
    $query = $db->prepare($sql);
    $query->execute([
        ':id' => $_SESSION['user']['id']
    ]);
    $dataPost = $query->fetchAll(PDO::FETCH_ASSOC);
//Affiche le nombre de post  pour l(utilisateur connecter)
        $sql = 'SELECT count(idPost) FROM post WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute([
            ':id' => $_SESSION['user']['id']
        ]);
        $nbPost = $query->fetchAll(PDO::FETCH_ASSOC);
//Afficher les commentaires       
        $sql = 'SELECT comment.contenuCom,comment.timeCom,comment.idPost,comment.idComment, users.pseudo FROM `comment`, `users` WHERE comment.id = users.id  ';
        $query = $db->prepare($sql);
        $query->execute([]);
        $listCom = $query->fetchAll(PDO::FETCH_ASSOC);

// Afficher tout les utilisateurs pour l'admin
        $sql ='SELECT * FROM `users` WHERE roles ="users"';
        $query = $db->prepare($sql);
        $query->execute([]);
        $listUsers = $query->fetchAll(PDO::FETCH_ASSOC);
        
ob_start() ?>


<?php require __DIR__.'/../../src/partials/headerProfil.php'; ?>
 <div class="container-fluid mt-4">
    <div class="row ">
        <div class="col-12">
            <div class="row justify-content-center">
                <?php  
                    foreach($dataPost as $key =>$value ) { 
                        
                        require __DIR__.'/../../src/partials/card.php';
                     } 
                ?>
            </div>
        </div>
        <div class="col-12 mt-5">
            <a href="#" style="left: 0; bottom: 0"
                ><button class="btn btn-dark">
                    <i
                        class="bi bi-arrow-up-circle-fill"
                    ></i></button
            ></a>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>