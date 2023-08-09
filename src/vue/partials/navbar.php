 <?php if (empty($_SESSION['user'])) {
   ?>
 <?php } else { ?>
    <div class="navigation">
       <div class="logo">
          <a class="no-underline" href="/?Home">
             Instagram
          </a>
       </div>
       <div class="navigation-search-container">
          <!-- <form method="post" action="/actions/searchTag.php">
             <input class="search-field" type="text" placeholder="Search">
             <div class="search-container">
                <div class="search-container-box">
                   <div class="search-results">
                   </div>
                </div>
             </div>
          </form> -->
       </div>
       <div class="navigation-icons">
          <a href="/?Create" class="navigation-link">
             <i class="bi bi-plus-square"></i>
          </a>
         
          <a class="dropdown dropleft ">
             <a class=" " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img style="
            width: 35px;
            border-radius: 50%;" src="<?= $_SESSION['user']['url_profile'] ? $_SESSION['user']['url_profile'] : "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" ?>" alt="">
             </a>
             <div class="dropdown-menu bg-light">
                <a href=/?Profil><button style="width:100%;" class="btn btn-light">Profil</button></a>
                <a href=/?Settings><button style="width:100%;" class="btn btn-light">Settings</button></a>
                <a href="/?Logout" id="signout" class="navigation-link">
                   Déconnexion
                </a>
             </div>
          </a>
       </div>
    </div>
 <?php } ?>