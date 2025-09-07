<?php
session_start();
// This is a sample code in case you wish to check the username from a mysql db table
include('connection.php');
include('../connection.php');



$id=$_REQUEST['id'];
//echo $id;
  $sql =mysqli_query($conn,"delete from user where id='$id'");
if($sql)
{
	echo "<script>window.location.href='user.php'</script>";
}
else
{
	echo "<script>window.location.href='user.php'</script>";
}
?>

