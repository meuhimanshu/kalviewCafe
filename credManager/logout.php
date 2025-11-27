<?php
// Expire the user cookie
setcookie("user", "", time() - 3600, "/");
session_destroy();

// Redirect to the login page
header("Location: ../credManager/login.php");
exit();
?>
