<form method="post" action="/actions/like.php">
    <input type="hidden" name="idPost" value="<?= $value['idPost'] ?>">
    <a href=""> <button type="submit" class="btn btn-default" style="background:none;" name="val" ><i class="bi bi-heart" style="color:red;font-size:1rem;"> <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-none">
    <?= $value['likes']?>
    <span class="visually-hidden"></span> </i></button> </a>
</form>