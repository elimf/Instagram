<?php
session_start();
session_unset();
session_destroy(); //to ensure you are using same session
unset($_SESSION['user']); //destroy the session
if (!isset($_ENV['url'])) {
    $_ENV['url'] = "https://elimf.alwaysdata.net";
}
header("location: " . $_ENV['url']); //to redirect back to "index.php" after logging out
exit();
