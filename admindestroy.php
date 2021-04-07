<?php
session_start();
unset($_SESSION['user']);
session_destroy();
header("location: adminindex.php?Message=" . "Successfully logged out!!");
?>