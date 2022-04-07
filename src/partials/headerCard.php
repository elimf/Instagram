
    <div class="row">
        <div class="col-3 ">
            <i class="bi bi-person-fill border-rounded" style="font-size:2rem"></i>
            @<?php echo  $value['pseudo'] ; ?>
        </div>
        <div class="col-7">

        </div>
        <div class="col-1">
            <?php if($_SESSION['user']['roles'] == "admin"){
                                         require __DIR__.'/../../src/partials/drop.php'; }
                                         ?>
        </div>
    </div>

