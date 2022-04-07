
              <?php if(empty($_SESSION['user'])){
                            ?>

                            <?php }else{?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02"
        aria-expanded="false"
        aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
        <div class="container-fluid ">
            <div class="row justify-content-end  ">
                <div class="col-5  ">
                    <div class="row">
                        <div class="col-2 ">
                                <a href=/Home> <button class="btn btn-light"><i class="bi bi-house-fill" style="font-size:2rem;"></i></button> </a>
                        </div>
                        <div class="col-10  text-center">
                            <a href="/Profil"><button class= "btn btn-light" ><i class="bi bi-person-fill" style="font-size:1,5rem;" >@<?= $_SESSION['user']['pseudo']?></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-5  ">
                        <form method="post" action="/actions/searchTag.php">
                          <div class="col-12">
                              <div class="row">
                                  <div class="col">
                                         <input type="text" name="tag" class="form-control"placeholder="Search a post with tag"> 
                                  </div>
                                  <div class="col-0">
                                        <button type="submit" style="height:10%;height:50px;" class="btn btn-light">
                                  <i class="bi bi-search " style="font-size:1,5rem;"></i>
                              </button>
                                  </div>
                              </div>
                          </div>
                      </form>
                </div>
                <div class="col-2  ">
                    <div class="row justify-content-end ">
                        <div class="col-12 ">
                            <div class="dropdown dropleft">
                                <button class="btn btn-light"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-gear-wide" style="font-size:2rem;"></i>
                                                                </button>
                                <div class="dropdown-menu bg-light">
                                        <a href=/Settings><button style="width:100%;" class="btn btn-light">Settings</button></a>
                                         <a href="/Create"><button style="width:100%;" class="btn btn-light">Add a post</button></a>
                                          <a href="/Logout"><button style="width:100%;" class="btn btn-light">Logout</button></a>
                                </div>
                                </div>                               
                        </div>          
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
            

                                <?php }?> 
 