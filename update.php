<?php
include "dbconnect.php"; 
{
    $PID=$_POST["PID"];
    $Quantity=$_POST["Quantity"];
    $sql ="UPDATE products SET Available='$Quantity' WHERE PID='$PID'";
    if ($con->query($sql) === TRUE) {
        print '<script type="text/javascript"> alert("Quantity has been updated!");
        window.location.href = "adminproducts.php";
        </script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
}
?>