<?php
session_start();
if(empty($_SESSION['username'])) {
    header("location: index.php");
} 

  include 'db.php';

 ?>

<html>
  <?php include 'head.php';?>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href=""><b>Admin</b>Login</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Welcome  <?php echo strtoupper($_SESSION['username']);?></p>
     
          <a href="register.php" class="btn btn-block btn-facebook btn-flat">Register</a>
          <a href="questions.php" class="btn btn-block btn-google btn-flat">Manage Questionaire</a>
          <a href="#" class="btn btn-block btn-facebook btn-flat">View Results</a>
          <a href="#" class="btn btn-block btn-google btn-flat">Account Settings</a>
          <center><a href="logout.php" class="btn bg-navy margin">Logout</a></center>
        
      </div>
    </div>

  </body>
</html>
