<div class="card bg-light">
    <div class="card-header"style="background: none;">
        <?php  require __DIR__.'/../../src/partials/headerCard.php';  ?>
    </div>
    <img
        class="card-img-top"
        src="<?php echo  $value['url'] ; ?>"
        alt="Card image cap"
        style="max-height:inherit"
    />
    <div class="card-body bg-light">
        <div class="row justify-content-between">
            <div class="col-12">
                <div class="row ">
                    <div class="col-1">
                        <?php  require __DIR__.'/../../src/partials/buttonLikes.php';  ?>
                    </div>
                    <div class="col-8">
                        <?php  require __DIR__.'/../../src/partials/buttonComment.php';  ?>
                    </div>
                </div>
            </div>
        </div>
        <p><?= $value['likes']?>   Likes </p>
        <h5 class="card-title"><?php echo $value['contenu'] ; ?></h5>
        <div class="row">
            <div class="com">
                <?php   foreach ($listCom as $key => $com) { ?>
                    <?php if($value['idPost'] == $com['idPost']) {?>
                        <?php $date = date_create($com['timeCom']); ?>
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-10 ">
                            <p class="card-text">
                            <span style="font-weight: bold">@<?= $com['pseudo'] ?></span>
                            <?= $com['contenuCom'] ?>
                            </p>
                        </div>
                        <div class="col-2 ">
                            <?php if($_SESSION['user']['roles'] == "admin"){
                                         require __DIR__.'/../../src/partials/dropCom.php';  }
                                         ?>
                        </div>
                        <div class="col-12">
                            <p class="card-text">
                                <small class="text-muted"
                                    ><?=date_format($date, 'H:i d-m-Y');?></small>
                            </p>
                        </div>
                    </div>
                    
                    
                   
                </div>
                <hr>
                    <?php }else{ ?>
                            
                        <?php   }?>
                    <?php   }  ?>
            </div>
        </div>
    </div>
</div>
