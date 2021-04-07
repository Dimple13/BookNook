<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Books">
    <title>Book Nook-A paradise for bookworms!!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
    <style>
      .modal-header {background:#D67B22;color:#fff;font-weight:800;}
      .modal-body{font-weight:800;}
      .modal-body ul{list-style:none;}
      .modal .btn {background:#D67B22;color:#fff;}
      .modal a{color:#D67B22;}
      .modal-backdrop {position:inherit !important;}
       #login_button,#register_button{background:none;color:#D67B22!important;}       
       #query_button {position:fixed;right:0px;bottom:0px;padding:10px 80px;
                      background-color:#D67B22;color:#fff;border-color:#f05f40;border-radius:2px;}
  	@media(max-width:767px){
        #query_button {padding: 5px 20px;}
  	}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin: 0 auto;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}
th{
    color:#D67B22; 
    background-color:#404040;
}

    </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="adminindex.php" style="padding:10px;color:#D67B22">BookNook</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav navbar-right">
        <?php
           echo'
            <li> <a href="adminproducts.php" class="btn btn-lg"> Products </a> </li>;
            <li> <a href="showorders.php" class="btn btn-lg"> Orders </a> </li>
            <li> <a href="showusers.php" class="btn btn-lg"> Users </a> </li>; 
            <li> <a href="showqueries.php" class="btn btn-lg"> Queries </a> </li>;
            <li> <a href="admindestroy.php" class="btn btn-lg"> LogOut </a> </li>';          
?>
          </ul>
        </div>
      </div>
    </nav>
  <div id="top" >
      <div class="container-fluid" id="header">
          <div class="row">
          <center><h1>Products and their quantities currenty available</h1>
          <br>
          <form method="get" action="addbook.php" style="display:inline">
                <button type="submit" style="color:#D67B22;background-color:#404040;height:50px;width:150px">Add book</button>
            </form>
            <form method="get" action="deletebook.php" style="display:inline">
                <button type="submit" style="color:#D67B22;background-color:#404040;height:50px;width:150px">Delete book</button>
            </form>
            <form method="get" action="updatequantity.php" style="display:inline">
                <button type="submit" style="color:#D67B22;background-color:#404040;height:50px;width:150px">Update Quantity</button>
            </form>
            <br>
            <br></center>
          <?php
include "dbconnect.php";
$sql = "SELECT PID,Title,Available FROM products";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>PID</th>";
                echo "<th>Title</th>";
                echo "<th>Available quantity</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['PID'] . "</td>";
                echo "<td>" . $row['Title'] . "</td>";
                echo "<td>" . $row['Available'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);
?>
<br>
<br>
       </div>       
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>	