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
            <center><h1>Add book</h1></center>
            <form class="form" role="form" method="post" action="add.php" >
            <div style="width:75%;margin: 0 auto;">
            <div class="form-group">
                    <label for="PID">PID</label>
                    <input type="text" name="PID" class="form-control" placeholder="PID of book" required>
                </div>
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" name="Title" class="form-control" placeholder="Title" required>
                </div>
                <div class="form-group">
                    <label for="Auhtor">Author</label>
                    <input type="text" name="Author" class="form-control" placeholder="Author of book" required>
                </div>
                <div class="form-group">
                    <label for="MRP">MRP</label>
                    <input type="text" name="MRP" class="form-control"  placeholder="MRP" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" placeholder="Price of book" required>
                </div>
                <div class="form-group">
                    <label for="Discount">Discount</label>
                    <input type="text" name="Discount" class="form-control"  placeholder="Discount on the book" required>
                </div>
                <div class="form-group">
                    <label for="Available">Available</label>
                    <input type="text" name="Available" class="form-control"  placeholder="Available copies" required>
                </div>
                <div class="form-group">
                    <label for="Publisher">Publisher</label>
                    <input type="text" name="Publisher" class="form-control"  placeholder="Publisher of the book" required>
                </div>
                <div class="form-group">
                    <label for="Edition">Edition</label>
                    <input type="text" name="Edition" class="form-control"  placeholder="Edition" required>
                </div>
                <div class="form-group">
                <label for="Category">Category</label>
                <select class="form-control" name="Category" required>
                    <option value="Entrance Exams">Entrance Exams</option>
                    <option value="Literature and Fiction">Literature and Fiction</option>
                    <option value="Biographies and Auto Biographies">Biographies and Auto Biographies</option>
                    <option value="Academic and Professional">Academic and Professional</option>
                    <option value="Children and Teens">Children and Teens</option>
                    <option value="Regional Books">Regional Books</option>
                    <option value="Business and Management">Business and Management</option>
                    <option value="Health and Cooking">Health and Cooking</option>
                    <option value="others">Others</option>  
                </select>
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" name="Description" class="form-control"  placeholder="Description" required>
                </div>
                <div class="form-group">
                    <label for="Language">Language</label>
                    <input type="text" name="Language" class="form-control"  placeholder="Language" required>
                </div>
                <div class="form-group">
                    <label for="page">Page</label>
                    <input type="text" name="page" class="form-control"  placeholder="Number of pages" required>
                </div>
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="text" name="weight" class="form-control"  placeholder="Weight" required>
                </div>
                <div  style="width:25%;margin: 0 auto;">
                   <button type="submit" name="submit" value="add" class="btn btn-block">
                    Add book
                    </button>
                    <br>
                    <br>
                </div>
            </div>
            </form>
            
       </div> 
    </div>      
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>	