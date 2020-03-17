<?php
session_start();
session_destroy();
// (unset($_SESSION['student']))
header('Location:login_admin.php?loggedout');
exit;
?>