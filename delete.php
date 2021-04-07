<?php
include "dbconnect.php"; 
{
    $PID=$_POST["PID"];
    $sql ="DELETE FROM products WHERE PID='$PID'";
    if ($con->query($sql) === TRUE) {
        print '<script type="text/javascript"> alert("Book has been successfully deleted!!!");
        window.location.href = "adminproducts.php";
        </script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
}
?>