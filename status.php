<?php
include "dbconnect.php"; 
{
    $orderid=$_POST["orderid"];
    $status=$_POST["status"];
    $sql ="UPDATE orders  SET status='$status' WHERE orderid='$orderid'";
    if ($con->query($sql) === TRUE) {
        print '<script type="text/javascript"> alert("Status has been updated!");
        window.location.href = "showorders.php";
        </script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
}
?>