<?php

session_start();
require_once('../connection.php');
$id=$_REQUEST['id'];


$sql = mysqli_query($conn,"delete from room_details where id='$id'");

if($sql)
{
	echo "<script>window.location.href='rooms.php'</script>";
}
else
{
	echo "<script>window.location.href='rooms.php'</script>";
}
?>
