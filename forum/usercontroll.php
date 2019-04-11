<!DOCTYPE html>
<html>
<?php
  include ('layout_manager.php');
 include ('admin_function.php');
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UDict</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
 <link rel="stylesheet" href="styles/main.css" type="text/css">
<style type="text/css">
  body {
    overflow-x: hidden;
        box-sizing: border-box;
  }
  ul li a:hover{
  text-decoration: none;
  }
</style>
  <link rel="stylesheet" href="styles/theme.css" type="text/css">
</head>

<body >

  
  <nav class="navbar bg-primary navbar-dark">
    <div class="container"> <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-lg fa-circle"></i>
        <b> UDict</b>
      </a>
      <a class="navbar-brand" href=\forum/home.php>
        <b><h2> Forum</h2></b>
      </a>
      <div class="row">
        <div class="col-md-12">
         <?php 
            session_start(); 
            if (isset($_SESSION['username'])) {
               echo '<a class="navbar-brand" href="#"> <i class="fa d-inline fa-lg fas fa-user"></i>&nbsp;'.$_SESSION["username"];
            } 
             else if ($_SESSION['id']==0) {
              header("Location: /forum/logoutt.php");
            } 
            else
            echo  '<a class="navbar-brand" href="login.php"> <i class="fa d-inline fa-lg fa-sign-in"></i>&nbsp;Login'; ?>
            </a>
          <a class="navbar-brand" href="/forum/logoutt.php"><i class="fa fa-user  fa-sign-out"></i><i class="fa d-inline fa-lg fa-lg-out"></i>&nbsp;Logout</a></div>
      </div>
    </div>
  </nav>

  
  
  <div class="text-center forumdesc" style="width: 100%;">
      <h4 style="padding: 30px;">The best way to predict the future is to create it. – Abraham Lincoln</h4>
  </div>
  <div style="clear: both;"></div>
  <ul class="nav nav-tabs" >
  <li ><a href="homeadmin.php">Home</a></li>
  <li class="active"><a href="usercontroll.php">Accounts</a></li>
  <li><a href="topiccontroll.php">Topics</a></li>
  <li><a href="commentcontroll.php">Comment</a></li>
</ul>
    <div class="content" style="width: 90%;margin-left: 5%;">
      <?php displayuser(); ?>
    </div>
  
   
    <div class="py-3" id="footer" style="clear: both;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center d-md-flex align-items-center"> <i class="d-block fa fa-stop-circle fa-2x mr-md-5 text-primary"></i>
            <ul class="nav mx-md-auto d-flex justify-content-center">
              <li class="nav-item"> <a class="nav-link active" href="#">Home</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Gammar</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">HangMan</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
            </ul>
            <div class="row">
              <div class="col-md-12 d-flex align-items-center justify-content-md-between justify-content-center my-2"> <a href="#">
                  <i class="d-block fa fa-facebook-official text-muted fa-lg mx-2"></i>
                </a> <a href="#">
                  <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
                </a> <a href="#">
                  <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
                </a> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="mt-2 mb-0">© 3-2019 UDict. All rights reserved</p>
          </div>
        </div>
      </div>
    </div>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</body>

</html>