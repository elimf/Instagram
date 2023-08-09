<?php
$title = "Instagram";
ob_start()?>
<div class="container">
   <div class="box">
      <div class="heading"></div>
      <div class="col-12 ">
         <?php if (isset($_SESSION['login_error'])) {?>
         <div class="alert alert-danger">
            <?=$_SESSION['login_error']?>
         </div>
         <?php
unset($_SESSION['login_error']);
}
?>
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
      <form class="login-form" method="post" action="/actions/login.php">
         <div class="field">
            <input id="username" name="email"type="name" placeholder="Email" />
            <label for="username">Email</label>
         </div>
         <div class="field">
            <input id="password" name="password" type="password" placeholder="password" />
            <label for="password">Password</label>
         </div>
         <button class="login-button" title="login">Log In</button>
         <div class="separator">
            <div class="line"></div>
            <p>OR</p>
            <div class="line"></div>
         </div>
         <div class="other">
            <a class="forgot-password" href="#">Forgot password?</a>
         </div>
      </form>
   </div>
   <div class="box">
      <p>Don't have an account? <a class="signup" href="/?Register">Sign Up</a></p>
   </div>
</div>
<style>
   <?php require_once "../src/public/css/insta.css";?>
</style>
<?php $content = ob_get_clean();?>