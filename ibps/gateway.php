<?php
session_start();
if(empty($_SESSION['reference_no'])) {
    header("location: index.php");
} 
?>
<html>
  <?php include 'head.php';?>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
          <a href="index.php"><b><h3>Online Entrance Examination</h3></b></a>
      </div>
      <div class="login-box-body">
          <p class="login-box-msg">Welcome to Our Online Examination System !</p>
          <p>Name: <?php echo $_SESSION['candidate_name'] ;?>| Roll Number: <?php echo $_SESSION['reference_no'] ;?></p>
          <p>
			<b>Reminders:</b><br /><br />
			* Once you Failed the Exam, No More Second Chance.<br />
			* Finalize your Answers before you click the Submit button.<br />
			* You Have 15 Minutes to Answer all Questions.<br />
			* You will get 2 Points for each Correct Answer.<br />
			* Passing Grade is 75.<br />
			* No Cheating, God is watching!<br />
			</p>
   
          <a href="quest.php" class="btn btn-block  btn-facebook"> Start Test</a>
          <a href="logout.php" class="btn btn-block  btn-google "></i>Cancel</a>
        
      </div>
    </div>
  </body>
</html>


