<?php 
$title="Creating";ob_start() ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                    <h2>Add a post efficiently!</h2>
                
            </div>
            <div class="col-12">
                    
                            <?php require __DIR__.'/../../src/partials/result/postResult.php'?>
            </div>
            <div class="col-12">
                <form method="post" action="/actions/post.php">
                    <div class="form-group">
                        <label>Post title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="post_title" placeholder="Choose a description">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter your url</label>
                        <input type="text" class="form-control" name="post_picture" placeholder="Url please">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tag</label>
                        <input type="text"class="form-control" name="tag" placeholder="tag please">
                        
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <div class="col-12 mt-5">
                    <a href="/Home"><button class="btn btn-dark">Back to the home</button></a>
                </div>
            </div>
            
        </div>
    </div>
   
    
<?php $content = ob_get_clean(); ?>