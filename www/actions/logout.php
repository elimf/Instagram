<?php   
session_start();
session_unset(); 
session_destroy();//to ensure you are using same session
unset($_SESSION['user']); //destroy the session
header("location: https://elimf.alwaysdata.net/"); //to redirect back to "index.php" after logging out
exit();
?>