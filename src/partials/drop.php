
<div class="dropdown dropleft">
      <button class="btn btn-none" style="background: none" type="button" data-toggle="dropdown"> <i class="bi bi-three-dots-vertical"></i>
        </button>
      <div class="dropdown-menu">
          <form action="/actions/logPost.php" method="post">
            <div class="row justify-content-center">
                <div class="col-0 ">
                <input type="hidden" name="contenu"  value="<?= $value['contenu'] ?>">
                <input type="hidden" name="url"  value="<?= $value['url'] ?>">
                <input type="hidden" name="tag"  value="<?= $value['tag'] ?>">
                <input type="hidden" name="id"  value="<?= $value['idPost'] ?>">
            </div>
            <div class="col-0 ">
                <button type="submit"  class="btn" style="background: orange;">Update Post</button>
            </div> 
            </div>
            
        </form>
         <form action="/actions/deletePost.php" method="post">
            <div class="row justify-content-center">
                <div class="col-0 ">
                <input type="hidden" name="idPost"  value="<?= $value['idPost'] ?>">
            </div>
            <div class="col-0 ">
                <button type="submit"  class="btn btn-danger">Delete Post</button>
            </div> 
            </div>
            
        </form>
      </div>
    </div>