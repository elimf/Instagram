<?php   
session_start();
session_unset(); 
session_destroy();//to ensure you are using same session
unset($_SESSION['user']); //destroy the session
header("location: http://127.0.0.1:12001/Main"); //to redirect back to "index.php" after logging out
exit();
?>