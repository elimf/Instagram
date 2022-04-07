<div class="col-12 " >
    <div class="dropdown">
        <button
            class="btn"
            style="background: none"
            type="button"
            id="dropdownMenuButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
        >
            <i class="bi bi-three-dots-vertical"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <form action="/actions/logCom.php" method="post">
            <div class="row justify-content-center">
                <div class="col-0 ">
                <input type="hidden" name="idCom"  value="<?= $com['idComment'] ?>">
                <input type="hidden" name="contenu"  value="<?= $com['contenuCom'] ?>">
            </div>
            <div class="col-0 ">
                <button type="submit"  class="btn btn"style="background: orange;">Update Comment</button>
            </div> 
            </div>
            
        </form>
            <form action="/actions/deleteCom.php" method="post">
            <div class="row justify-content-center">
                <div class="col-0 ">
                <input type="hidden" name="idCom"  value="<?= $com['idComment'] ?>">
            </div>
            <div class="col-0 ">
                <button type="submit"  class="btn btn-danger">Delete Comment</button>
            </div> 
            </div>
            
        </form>
        </div>
    </div>
</div>
