<?php if(isset($_SESSION['search_error'])) { ?>
                                <div class="alert alert-danger">
                                    <h1><?= $_SESSION['search_error'] ?></h1>
                                </div>
                                <?php 
                                    unset($_SESSION['search_error']);
                                } 
                                ?>
            <?php if(isset($_SESSION['search'])) { ?>
                                <div class="alert alert-success">
                                    <h1><?= $_SESSION['search'] ?></h1>
                                </div>
                                <?php 
                                    unset($_SESSION['search']);
                                } 
                                ?>