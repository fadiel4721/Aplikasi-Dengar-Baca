<?php
session_start();
session_destroy(); 


header("Location: homepage_user.php"); // Arahkan ke halaman login
exit();
?>
