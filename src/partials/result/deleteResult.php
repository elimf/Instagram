<?php if(isset($_SESSION['delete'])) { ?>
                                <div class="alert alert-success">
                                    <h1><?= $_SESSION['delete'] ?></h1>
                                </div>
                                <?php 
                                    unset($_SESSION['delete']);
                                } 
                                ?>