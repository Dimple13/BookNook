<?php
include "dbconnect.php"; 
session_start();
if(!isset($_SESSION['user']))
{
    print '<script type="text/javascript"> alert("Please login!");
    window.location.href = "adminindex.php";
    </script>';
} 
else{
    header("location: showusers.php"); 
}
?>