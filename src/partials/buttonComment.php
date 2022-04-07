<form action="/actions/comment.php" method="post">
    <div class="row justify-content-center">
        <div class="col-0 ">
        <input type="hidden" name="idPost"  value="<?= $value['idPost'] ?>">
        <input type="text" class="Inputcomment"name="comment" placeholder="Add a comment">
    </div>
    <div class="col-0 ">
        <button type="submit" id="btnCom" class="btn btn-primary">Share</button>
    </div> 
    </div>
    
</form>
