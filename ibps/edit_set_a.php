<?php
session_start();
if(empty($_SESSION['username'])) {
    header("location: index.php");
} 
include 'head.php';
include 'db.php';

if(isset($_POST['insert'])){
    
    $a=$_POST['seta_sn'];
    $b=$_POST['seta_question'];
    $c=$_POST['seta_option_a'];
    $d=$_POST['seta_option_b'];
    $e=$_POST['seta_option_c']; 
    $f=$_POST['seta_option_d'];
    $g=$_POST['seta_answer']; 
    $h=$_POST['seta_qset'];
    $insert_query="Insert into tbl_edit_set_a (seta_sn,seta_question,seta_option_a,seta_option_b,seta_option_c,seta_option_d,seta_answer,seta_qset) values('$a','$b','$c','$d','$e','$f','$g','$h')";
    mysql_query($insert_query);  

}
?>

<body style="background-color: ghostwhite">
    <a href="dashboard.php">BACK to HOME</a><?php echo $_SESSION['username'];?>
  <form action="" method="post">
  <div class="row">
      <div class="col-md-4" style=" float: right">
                <div class="box-body">               
                   <div class="panel box box-danger">                    
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Add Question
                          </a>
                        </h4>                   
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="box-body">Enter Question No. 
                   <div class="input-group">
                     
                       
                       <input type="text" class="col-xs-2" name="seta_sn" autocomplete="off">
                
                      <input type="text" value="" name="seta_question" class="form-control" autocomplete="off">
                    </div>
                    Choices:
                    <div class="input-group margin">
                    <div class="input-group-btn">
                        <div class="btn btn-default">A</div>
                       </div>
                 <input type="text"  name="seta_option_a" class="form-control" autocomplete="off">
                  </div>
                 <div class="input-group margin">
                    <div class="input-group-btn">
                        <div class="btn btn-default">B</div>
                       </div>
                 <input type="text"  name="seta_option_b" class="form-control" autocomplete="off">
                  </div>
                  <div class="input-group margin">
                    <div class="input-group-btn">
                        <div class="btn btn-default">C</div>
                       </div>
                 <input type="text" name="seta_option_c" class="form-control" autocomplete="off">
                  </div>
                  <div class="input-group margin">
                    <div class="input-group-btn">
                        <div class="btn btn-default">D</div>
                        </div>
                  <input type="text" name="seta_option_d" class="form-control" autocomplete="off">
                  </div>
                
                   <table>
                        <tr>
                      <td> Answer:</td>
                
                      <td><input type="text" name="seta_answer" autocomplete="off"></td>
                  </tr>
                   <tr>
                      <td>Set Name</td>
                 
                      <td><input type="text" name="seta_qset" value="<?php echo 'A';?>" readonly></td>
                  </tr>
                  
                   </table>
                    <button type="submit" name="insert" class="btn btn-info" style="float: right">Insert</button> 
                </div>
                        
                      </div>
                        
                    </div>
                  
                   </div>
            </div>            
          </div>
        
</form>
<?php 


if(isset($_POST['savequest'])){
                                $a =1;
				for($hi=1;$hi<11;$hi++){
					
				 $question = $_POST['question'.$hi];
                                 $optiona = $_POST['optiona'.$hi];
                                 $optionb = $_POST['optionb'.$hi];
                                 $optionc = $_POST['optionc'.$hi];
                                 $optiond = $_POST['optiond'.$hi];
                                 $answer = $_POST['seta_answer'.$hi];
				
				
				$replace = mysql_query("UPDATE tbl_edit_set_a SET seta_question='$question',seta_option_a='$optiona',seta_option_b='$optionb',seta_option_c='$optionc',seta_option_d='$optiond',seta_answer='$answer' WHERE seta_sn='$hi'");
				
				}
					echo'
					<script>window.setTimeout(function() {window.location = "edit_set_a.php";});</script>';
		
			}
?>
<?php 

$questions = mysql_query("SELECT * FROM tbl_edit_set_a");
while($fetch = mysql_fetch_array($questions)){
 
			
                       		
			?>

    
   <form method="POST">
       
    <div class="col-md-4" style="margin-left: 10%;">
              <div class="box box-solid">
                <div class="box-body">
                  <div class="input-group">
                      <div class="input-group-addon">
                       <?php echo $a; ?>
                      </div>
                      <input type="text" value="<?php echo $fetch[2]; ?>" name="question<?php echo $fetch[1];?>" class="form-control">
                    </div>
                    Choices:
                    <div class="input-group margin">
                    <div class="input-group-btn">
                        <div class="btn btn-default">A</div>
                       </div>
                 <input type="text" value="<?php echo $fetch[3]; ?>" name="optiona<?php echo $fetch[1];?>" class="form-control">
                  </div>
                 <div class="input-group margin">
                    <div class="input-group-btn">
                        <div class="btn btn-default">B</div>
                       </div>
                 <input type="text" value="<?php echo $fetch[4]; ?>" name="optionb<?php echo $fetch[1];?>" class="form-control">
                  </div>
                  <div class="input-group margin">
                    <div class="input-group-btn">
                        <div class="btn btn-default">C</div>
                       </div>
                 <input type="text" value="<?php echo $fetch[5]; ?>" name="optionc<?php echo $fetch[1];?>" class="form-control">
                  </div>
                  <div class="input-group margin">
                    <div class="input-group-btn">
                        <div class="btn btn-default">D</div>
                        </div>
                  <input type="text" value="<?php echo $fetch[6]; ?>" name="optiond<?php echo $fetch[1];?>" class="form-control">
                  </div>
                  Answer:
                   <table class="table-bordered ">
                  <tr>
                      <td><input type="text" name="seta_answer<?php echo $fetch[1];?>" value="<?php echo $fetch[7]; ?>"></td>
                  </tr>
                   </table>
                </div>
              </div>
             </div>

</body>
        
<?php $a++ ; }?>
         
           <table class="table table-bordered text-center">
          <tr>
                      <td><button name="savequest" class="btn btn-success">Save Changes</button></td>
          </tr>
           </table>         
   </form>          
          <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
   
   