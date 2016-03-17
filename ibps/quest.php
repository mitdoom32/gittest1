<?php
session_start();
if (empty(isset($_SESSION['reference_no'])))
{
    header("location:index.php");
    
}
?>
<?php include_once 'db.php';?>

<form method="POST" action="submit.php">
    <?php
$code=$_SESSION['reference_no'];
$select_query=  mysql_query("Select * from register WHERE reference_no='$code'");
$row=  mysql_fetch_array($select_query);

if($row[3]=='A')
{
    include_once 'seta.php';
}
elseif ($row[3]=='B') {
    include_once 'setb.php';
}
 else {
    include_once 'setc.php';    
}
    
?>

</form>