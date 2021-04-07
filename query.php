<?php
include "dbconnect.php";

if($_POST["submit"]=="query") 
{
    $sender=$_POST["sender"];
    $sender_email=$_POST["senderEmail"];
    $query=$_POST["message"]; 
    $date=date("Y/m/d");
    $sql ="INSERT INTO queries VALUES ('$sender','$sender_email','$query','$date')";
    if ($con->query($sql) === TRUE) {
        header("location: index.php?response="."Your Message has been successfully sent! Our customer executive would respond shortly.");
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
    
}

?>