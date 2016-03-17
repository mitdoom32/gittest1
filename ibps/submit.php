<?php 
session_start();
include_once 'db.php';
?>
<?php 
if(isset($_POST['submit'])){
	
	echo $name = $_SESSION['candidate_name'];
        echo $code=$_SESSION['reference_no'];
        for($hi=1;$hi<11;$hi++){
       echo $optiona = $_POST['r3'.$hi];
        }
}
?>