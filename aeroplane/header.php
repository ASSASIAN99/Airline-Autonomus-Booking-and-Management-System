<html>
<?php 
session_start();
?>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-default fixed top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a  href="index.php"><img src="pic/me.png"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <?php if(isset($_SESSION['email']))
      {  
      echo '<li><a href="guiderbuis.php">Guider Job</a></li>';
      echo '<li><a href="logout.php">Logout</a></li>';
      }else
      {
    
        echo '<li><a href="mateme.php">Login</a></li>
        <li><a href="mt_reg.php">Signup</a></li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
