<?php
session_start();
include "dbconnect.php";
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">
               alert("' . $_GET['Message'] . '");
           </script>';
}

if (isset($_GET['response'])) {
    print '<script type="text/javascript">
               alert("' . $_GET['response'] . '");
           </script>';
}
if(isset($_POST['submit']))
{
  if($_POST['submit']=="adminlogin")
  { 
        $username=$_POST['login_username'];
        $password=$_POST['login_password'];
        if($username=="admin@booknook.com" and $password=="admin@1234")
        {
             $_SESSION['user']="admin";
             print'
                <script type="text/javascript">alert("Admin successfully logged in!!!");</script>
                  ';
        }
        else
        {    print'
              <script type="text/javascript">alert("Incorrect Username Or Password!!");</script>
                  ';
        }
  }

}
?>
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
    .card{
          display:inline;
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
          <a class="navbar-brand" href="#" style="padding:10px;color:#D67B22">BookNook</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav navbar-right">
        <?php
        if(!isset($_SESSION['user']))
          {
            echo'
            <li>
                <button type="button" id="login_button" class="btn btn-lg" data-toggle="modal" data-target="#login">Login</button>
                  <div id="login" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-center">Login Form</h4>
                            </div>
                            <div class="modal-body">
                                          <form class="form" role="form" method="post" action="adminindex.php" accept-charset="UTF-8">
                                              <div class="form-group">
                                                  <label class="sr-only" for="username">Username</label>
                                                  <input type="text" name="login_username" class="form-control" placeholder="Username" required>
                                              </div>
                                              <div class="form-group">
                                                  <label class="sr-only" for="password">Password</label>
                                                  <input type="password" name="login_password" class="form-control"  placeholder="Password" required>
                                              </div>
                                              <div class="form-group">
                                                  <button type="submit" name="submit" value="adminlogin" class="btn btn-block">
                                                      Sign in
                                                  </button>
                                              </div>
                                          </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                  </div>
            </li>
            ';
          } 
        else
          {   echo' <li> <a href="#" class="btn btn-lg"> Hello ' .$_SESSION['user']. '.</a></li> 
            <li> <a href="adminproducts.php" class="btn btn-lg"> Products </a> </li>;
            <li> <a href="showorders.php" class="btn btn-lg"> Orders </a> </li>
            <li> <a href="showusers.php" class="btn btn-lg"> Users </a> </li>; 
            <li> <a href="showqueries.php" class="btn btn-lg"> Queries </a> </li>; 
            <li> <a href="admindestroy.php" class="btn btn-lg"> LogOut </a> </li>';
               
          }
?>
          </ul>
        </div>
      </div>
    </nav>
    <div align=center id="top" >
     <br>

      <div class="container-fluid" id="header">
          <div class="row">
          <center><h1 style="color: #D67B22">Welcome to BookNook!<br>A paradise for every bookworm!!</h1></center>
         
       </div> 
        <Br><Br>
        <div>
        <div class="card border-right-0"style="width: 30rem;margin: 35px; display:inline-block;">
            <img class="card-img-top" src="img/books.jpg" alt="Card image cap" height="280px">
            <div class="card-body">
               <h3 class="card-title">Products</h3>
                <p class="card-text"><h4>Add, Delete or update the products</p></h4>
                <form method="get" action="alert2.php" style="display:inline">
                <button type="submit" style="color:#D67B22;background-color:#404040;height:50px;width:150px">Products</button>
            </form>
              <br>
            </div>      
        </div>
        <div class="card" style="width: 30rem;margin: 35px; display:inline-block;">
           <img class="card-img-top" src="img/order.png" alt="Card image cap" height="280px">
            <div class="card-body">
            <h3 class="card-title">Orders</h3>
            <p class="card-text"><h4>View all orders</p></h4>
            <form method="get" action="alert3.php" style="display:inline">
                <button type="submit" style="color:#D67B22;background-color:#404040;height:50px;width:150px">Orders</button>
            </form>
            <br>
        </div>     
        </div>
        <br>
        <div>
        <div class="card"style="width: 30rem;margin: 35px; display:inline-block;">
            <img class="card-img-top" src="img/user.png" alt="Card image cap" height="280px">
            <div class="card-body">
            <h3 class="card-title">Users</h3>
            <p class="card-text"><h4>Check all the registered users</h4></p>
            <form method="get" action="alert1.php" style="display:inline">
                <button type="submit" style="color:#D67B22;background-color:#404040;height:50px;width:150px">Users</button>
            </form>
            <br>
            </div>      
        </div>
        <div class="card" style="width: 30rem;margin: 35px; display:inline-block;">
           <img class="card-img-top" src="img/queries.jpg" alt="Card image cap" height="280px">
            <div class="card-body">
            <h3 class="card-title">Queries</h3>
            <p class="card-text"><h4>Review all the customer's query</p></h4>
            <form method="get" action="alert3.php" style="display:inline">
                <button type="submit" style="color:#D67B22;background-color:#404040;height:50px;width:150px">Queries</button>
            </form>
            <br>
        </div>      
</div>
  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>	