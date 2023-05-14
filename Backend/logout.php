<?php
include('config.php');
session_destroy();
setcookie('remember_token', '', time()-3600, "/"); // 86400 = 1 day
header("Location: ../Frontend/homepage.html");
exit;
?>