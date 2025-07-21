<?php
    require_once('../connection.php');
	
	$roomid = $_POST['roomid'];
	$type=$_POST['type'];
	$rate=$_POST['rate'];
	$description=$_POST['description'];
	$rnumber=$_POST['rnumber'];
	mysqli_query($conn,"UPDATE kahini_room_details SET name='$type', price='$rate', description='$description', room_number='$rnumber' WHERE id='$roomid'");
	//header("location: rooms.php");
	echo "<script>window.location.href='rooms.php'</script>";
?>