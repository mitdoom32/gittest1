<?php
session_start();
?>
<?php 
 include 'db.php';
if(isset($_POST['login'])){
 $code = $_POST['code'];
			
 $compare = mysql_query("SELECT * FROM register WHERE reference_no='$code' AND exam_status=1");
 $count = mysql_num_rows($compare);
 if($count >= 1){
     $data = mysql_fetch_array($compare);
     $_SESSION['candidate_name'] = $data[1];
     $_SESSION['reference_no'] = $data[2];
     echo $data['2'];
     header('Location:gateway.php');
 }else{?>
     
                    <div class="alert alert-danger alert-dismissable">
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                   Candidate Code Is Invalid!
                  </div>
<script>window.setTimeout(function() {window.location = "index.php";}, 3000);</script>
       <?php
	}
}
?>


<html>
   <?php include 'head.php';?>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
           <b>Candidate</b>Login
      </div>
    
      <div class="login-box-body">
        <p class="login-box-msg">Login</p>
        <form action="" method="post">
          <div class="form-group has-feedback">
              <input type="text" name="code" class="form-control" placeholder="Enter Code">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          
          <div class="row">
            <div class="col-xs-8">
            
                <label>
                  <a href="index.php" class="btn btn-primary btn-block btn-flat"></i>Back</a>
                </label>
         
            </div>
            <div class="col-xs-4">
                <button name="login" type="submit" class="btn btn-primary btn-block btn-flat">Login In</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </body>
</html>
