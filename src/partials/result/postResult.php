<?php if(isset($_SESSION['post_error'])) { ?>
                                <div class="alert alert-danger">
                                    <?= $_SESSION['post_error'] ?>
                                </div>
                                <?php 
                                    unset($_SESSION['post_error']);
                                } 