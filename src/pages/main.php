
<?php 
$title="Main";

ob_start() ?>
<div class="container-fluid ">
    <div class="row">
        <div class="col-12  text-center">
                <div class=" card  text-center">
                    <div class="card-body bg-light">
                        <h2 class="card-title">Instagram</h2>
                        <div class="row">
                            <!-- ERREUR CONNEXION OU INSCRIPTION-->
                            <div class="col-12 ">
                                <?php if(isset($_SESSION['login_error'])) { ?>
                                <div class="alert alert-danger">
                                    <?= $_SESSION['login_error'] ?>
                                </div>
                                <?php 
                                    unset($_SESSION['login_error']);
                                } 
                                ?>
                                <?php if(isset($_SESSION['signup_error'])) { ?>
                                <div class="alert alert-danger">
                                    <?= $_SESSION['signup_error'] ?>
                                </div>
                                <?php 
                                    unset($_SESSION['signup_error']);
                                } 
                                ?>
                                <?php if(isset($_SESSION['signup_valid'])) { ?>
                                <div class="alert alert-success">
                                    <?= $_SESSION['signup_valid'] ?>
                                </div>
                                <?php 
                                    unset($_SESSION['signup_valid']);
                                } 
                                ?>
                            </div>
                            <div class="col-12 mt-1">
                                   <?php require __DIR__.'/login/modalConnexion.php' ?>
                            </div>
                            <div class="col-12">
                                   <?php require __DIR__.'/login/modalInscription.php' ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

