<?php
session_start();
if(empty($_SESSION['username'])) {
    header("location: index.php");
} 
?>
<?php 
include 'db.php';
?>
    <?php 
    if(isset($_POST['submit']))
    {
        $a=$_POST['cname'];
        $b=$_POST['refno'];
        $c=$_POST['quest'];
        
        $insert_query="insert into register(candidate_name,reference_no,q_set,exam_status) values('$a','$b','$c','1')";
        mysql_query($insert_query);
        
        
    }
    ?>
<html>
  <?php include 'head.php';?>

  <body class="register-page">
    <div class="register-box">
      <div class="register-logo">
       <b>Welcome</b> <?php echo strtoupper($_SESSION['username']);?>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Register a new Canditate</p>
        <form action="" method="post">
          <div class="form-group has-feedback">
              <input type="text" name="cname" class="form-control" placeholder="Name of Examinee" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <input type="text" name="refno" class="form-control" readonly="readonly" value="<?php echo substr((date('his')), 0, 10); ?>" required>
          </div>
            <select class="form-control" name="quest" required>
              <option selected disabled>Select</option>
              <option>A</option>
              <option>B</option>
              <option>C</option>
          </select>
        
          <div class="row">
             
            <div class="col-xs-4">
                
                <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat" style="margin-top: 10px">Register</button>
            </div>
          </div>
        </form>
         
        <a href="dashboard.php" class="btn btn-block btn-primary btn-xs" style="">HOME</a>
          <a href="questions.php" class="btn btn-block btn-success btn-xs" style="">Questionnaire</a>
          <a href="results.php" class="btn btn-block btn-info btn-xs" style="">Results</a>
          <a href="#" class="btn btn-block btn-danger btn-xs" style="">Settings</a>
         <a href="logout.php" class="btn btn-block btn-warning btn-xs">Logout</a>
           
      </div>
    </div>
<?php 
if ($insert_query)
{?>
    <div class="callout callout-success">
                    <h4>Registration Successful</h4>
                   <p>User <?php echo $a ?> with reference number <?php echo $b ?> registered successfully.</p>
                  </div>
      <script>window.setTimeout(function() {window.location = "register.php";}, 3000);</script>
 <?php   
}
?>
  </body>
</html>

