<?php
include "dbconnect.php"; 
{
    $PID=$_POST["PID"];
    $Title=$_POST["Title"];
    $Author=$_POST["Author"]; 
    $MRP=$_POST["MRP"];
    $price=$_POST["price"];
    $Discount=$_POST["Discount"];
    $Available=$_POST["Available"];
    $Publisher=$_POST["Publisher"];
    $Edition=$_POST["Edition"];
    $Category=$_POST["Category"];
    $Description=$_POST["Description"];
    $Language=$_POST["Language"];
    $weight=$_POST["weight"];
    $sql ="INSERT INTO products VALUES ('$PID','$Title','$Author','$MRP','$price','$Discount','$Available','$Publisher','$Edition','$Category','$Description','$Language','$price','$weight')";
    if ($con->query($sql) === TRUE) {
        print '<script type="text/javascript"> alert("Book has been successfully added!!!");
        window.location.href = "adminproducts.php";
        </script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
    }
?>