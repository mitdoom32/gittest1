<?php
session_start();
if(empty($_SESSION['username'])) {
    header("location: index.php");
} 
?>
<?php 
$host='localhost';
$db='ibps';
$user='root';
$pass='mitesh';
$con=mysql_connect($host,$user,$pass);
mysql_select_db($db,$con) or('DB Error');
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
          <h3 style="margin: 0px"><center>Online Examination</center></h3>
          <hr style="margin: 20px 0px">
      <div class="input-group input-group-sm">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="button">Search</button>
                    </span>
                  </div><!-- /input-group -->
                  <div class="box-header" style=" margin-top: 20px; margin-bottom: 30px">
                  <div class="box-tools">
                    <ul class="pagination pagination-sm no-margin pull-right">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                  </div>
                  
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Examinee</th>
                        <th>Score</th>
                        <th>Remarks</th>
                        <th>Ref.No</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                         </tr>
                      </tbody>
                    <tfoot>
                      <tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        <a href="dashboard.php" class="btn btn-block btn-primary btn-xs">HOME</a>
          <a href="questions.php" class="btn btn-block btn-success btn-xs">Register</a>
          <a href="results.php" class="btn btn-block btn-info btn-xs">Questionnaire</a>
          <a href="#" class="btn btn-block btn-danger btn-xs">Settings</a>
         <a href="logout.php" class="btn btn-block btn-warning btn-xs">Logout</a>
              </div>     
                  
                  
           
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

