<?php
$title = "Instagram Register";

ob_start()?>
<div class="container">
   <div class="box">
      <div class="heading"></div>
      <div class="col-12 ">
         <?php if (isset($_SESSION['signup_error'])) {?>
         <div class="alert alert-danger">
            <?=$_SESSION['signup_error']?>
         </div>
         <?php
unset($_SESSION['signup_error']);
}
?>
         <?php if (isset($_SESSION['signup_valid'])) {?>
         <div class="alert alert-success">
            <?=$_SESSION['signup_valid']?>
         </div>
         <?php
unset($_SESSION['signup_valid']);
}
?>
      </div>
      <form class="login-form" method="post" action="/actions/signup.php">
          <div class="field">
            <input id="username" name="fullname" type="name" placeholder="Full name" />
            <label for="username">Full name</label>
         </div>
          <div class="field">
            <input id="username" name="username" type="name" placeholder="Username" />
            <label for="username"> username</label>
         </div>
         <div class="field">
            <input id="email" name="email" type="mail" placeholder="Email" />
            <label for="email">Email</label>
         </div>
         <div class="field">
            <input id="password" name="password" type="password" placeholder="Password" />
            <label for="password">Password</label>
         </div>
         <button class="login-button" title="login">Sign up</button>
         <div class="separator">
            <div class="line"></div>
            <div class="line"></div>
         </div>
      </form>
       -
   </div>
   <div class="box">
      <p>I have an account? <a class="signup" href="/">Login</a></p>
   </div>
</div>
<style>
   <?php require_once "../src/public/css/insta.css";?>
</style>
<?php $content = ob_get_clean();?>