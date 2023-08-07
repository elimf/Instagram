 <?php if (empty($_SESSION['user'])) {
    ?>
<?php } else {?>
<div class="navigation">
   <div class="logo">
      <a class="no-underline" href="/?Home">
      Instagram
      </a>
   </div>
   <div class="navigation-search-container">
      <form method="post" action="/actions/searchTag.php">
         <input class="search-field" type="text" placeholder="Search">
         <div class="search-container">
            <div class="search-container-box">
               <div class="search-results">
               </div>
            </div>
         </div>
      </form>
   </div>
   <div class="navigation-icons">
      <a href="/?Create" class="navigation-link">
      <i class="bi bi-plus-square"></i>
      </a>
      <a href="/?Search"  class="navigation-link">
      <i class="bi bi-compass-fill"></i>
      </a>
      <a class="navigation-link notifica">
         <i class="bi bi-heart"></i>
         <div class="notification-bubble-wrapper">
            <div class="notification-bubble">
               <span class="notifications-count">99</span>
            </div>
         </div>
         </i>
      </a>
      <a class="dropdown dropleft ">
         <a class=" "  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <img style="
            width: 35px;
            border-radius: 50%;" src="https://cdn.shopify.com/s/files/1/0287/6738/7780/products/PHOTO-PROFIL-MEC-ORANGE_300x.png?v=1597638270
            " alt="">
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

<style>
   <?php require_once "../src/public/css/navbar.css";?>
</style>
<?php }?>
	