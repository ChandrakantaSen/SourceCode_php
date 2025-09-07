<?php
require_once('../connection.php');



        $type=$_POST['type'];
		$rate=$_POST['rate'];
		$desc=$_POST['desc'];
		$rnum=$_POST['rnum'];
			

			
		$update=mysqli_query($conn,"INSERT INTO kahini_room_details (name, price, description, room_number)VALUES('$type','$rate','$desc','$rnum')");
        //header("location: rooms.php");
		echo "<script>window.location.href='rooms.php'</script>";
			exit();
		
			
	


?>
