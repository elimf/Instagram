<?php 
$title="Update Post";
ob_start() ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                    <h2>Update</h2>
            </div>
            <div class="col-12">
                   <?php require __DIR__.'/../../src/partials/result/postResult.php'?>
            </div>
            <div class="col-12">
                
                <form method="post" action="/actions/updateCom.php">
                    <div class="form-group">
                        <label>Commentaire</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="com" value="<?= $_SESSION['upd']['0']?>"  placeholder="Choose a description">
                    </div>
                    <div class="form-group">
                       
                        <input type="hidden" class="form-control" name="id" value="<?= $_SESSION['upd']['1']?>" >
                    </div>
                   
                    <div class="col-12">
                        <div class="row">
                            <div class="col-0">
                                 <button type="sumbit" class="btn btn-primary">Update</button>
                            </div>
                            <div class="col-0">
                                <a href="/Home"><button class="btn btn-dark">Back to the home</button></a>
                            </div>
                        </div>
                   
                    </div>
                </form>
            </div>
            
        </div>
    </div>
   