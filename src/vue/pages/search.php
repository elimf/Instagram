
<?php 
$title="Search";

 //Afficher les commentaires       
        $sql = 'SELECT * FROM `comment`, `users` WHERE comment.user_id = users.id_user  ';
        $query = $db->prepare($sql);
        $query->execute([]);
        $listCom = $query->fetchAll(PDO::FETCH_ASSOC);
        $listPost= $_SESSION['list'];
ob_start() ?>

<div class="container-fluid ">
    <div class="row justify-content-end ">  
        <div class="col-12">
            <?php require __DIR__.'/../partials/result/commentResult.php'?>
             <?php require __DIR__.'/../partials/result/deleteResult.php'?>
                <?php require __DIR__.'/../partials/result/searchResult.php'?>
        </div>
        
    </div>
</div>
<div class="container-fluid mt-4">
        <div class="row  ">
            <div class="col-11">
           
        </div>
        <div class="col-0">
            <a href="/?Home"><button class="btn btn-warning ">Return</button></a>
        </div>
            <div class=" col-12 ">
                <div class="row justify-content-center ">
                    <?php 
                        foreach($listPost as $key => $value ) { 
                                require __DIR__.'/../../src/partials/card.php'; 
                            
                        }
                    ?>
                        
                </div>
            </div> 
            <div class="col-12 mt-5">
                 <a href="#" style="left:0;bottom:0;"><button class="btn btn-dark"><i class="bi bi-arrow-up-circle-fill" ></i></button></a> 
            </div>
                    
        </div>
</div>
  
 
    
<?php $content = ob_get_clean(); ?>

