  <?php if(isset($_SESSION['comment_error'])) { ?>
                                <div class="alert alert-danger">
                                    <h1><?= $_SESSION['comment_error'] ?></h1>
                                    
                                </div>
                                <?php 
                                    unset($_SESSION['comment_error']);
                                } 
                                ?>
            <?php if(isset($_SESSION['comment_valide'])) { ?>
                                <div class="alert alert-success">
                                    <h1><?= $_SESSION['comment_valide'] ?></h1>
                                </div>
                                <?php 
                                    unset($_SESSION['comment_valide']);
                                } 
                                ?>