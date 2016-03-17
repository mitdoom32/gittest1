 
            <div class="callout callout-info">
              <h4>Hello <?php echo $_SESSION['candidate_name']; ?></h4>
              <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular links instead.</p>
            </div>
           
<?php include_once 'head.php';
 include_once 'db.php';?>
<?php 
$a=1;
$select=mysql_query("select * from tbl_edit_set_a");
while($row=mysql_fetch_array($select))
{
  
?>

<body style="background-color: ghostwhite">
    <div class="col-md-4" style="margin-left: 10%;">
        <div class="box box-solid">
            <div class="box-body">
                <div class="input-group">
                    <div class="input-group-addon">
                      <?php echo  $a; ?>
                </div>
                <input type="text" value="<?php echo $row['3'];?>" name="" class="form-control">
                </div>
                    
                <table class="table table-bordered">
                    <tr>
                        <td>A</td>
                        <td><?php echo $row['4'];?></td>
                        <td><span class="badge bg-red">
                                <input type="radio" value="A" name="<?php echo 'r3'.$row[0];?>" class="minimal-red">
                            </span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>B</td>
                         <td><?php echo $row['5'];?></td>                  
                         <td><span class="badge bg-yellow">
                                 <input type="radio" value="B" name="<?php echo 'r3'.$row[0];?>" class="minimal-red">
                             </span>
                         </td>
                    </tr>
                    
                    <tr>
                        <td>C</td>
                        <td><?php echo $row['6'];?></td>
                     
                        <td><span class="badge bg-light-blue">
                                <input type="radio" value="C" name="<?php echo 'r3'.$row[0];?>" class="minimal-red">
                            </span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>D</td>
                        <td><?php echo $row['7'];?></td>                     
                        <td><span class="badge bg-green">
                                <input type="radio" value="D" name="<?php echo 'r3'.$row[0];?>" class="minimal-red">
                            </span>
                        </td>
                    </tr>                    
                </table>              
            </div>            
        </div>
    
    </div>

<?php $a++; }?>

<div class="pull-right">
<button name="submit" class="btn-success btn-large" >Submit Exam</button>
</div>
    
    </body>
    