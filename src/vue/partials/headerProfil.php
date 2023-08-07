 <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <?php require __DIR__.'/../../src/partials/result/commentResult.php'?>
             <?php require __DIR__.'/../../src/partials/result/deleteResult.php'?>
        </div>
        <div class="col-10">
            <div class="row">
                <div class="col-5">
                    <a href="/Profil"
                        ><button
                            style="background: #ffffff"
                            class="btn rounded-circle"
                        >
                            <i
                                class="bi bi-person-fill"
                                style="font-size: 4rem"
                            ></i></button
                    ></a>
                    @<?= $_SESSION['user']['pseudo']?>
                </div>
                <div class="col-6 ml-5">
                    <h4>
                        Publications:<?= $nbPost[0]['count(idPost)'] ?>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-2">
            <a href="/Home"><button class="btn btn-warning">Back</button></a>
        </div> 
    </div>
</div>