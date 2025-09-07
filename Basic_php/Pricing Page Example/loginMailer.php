<?php
	include_once('DAO.php');
	$fname = $_POST['fname'];
	$dob = $_POST['dob'];
	#$gndr = $_POST['gndr'];
	$eml = $_POST['eml'];
	$mbl = $_POST['mbl'];
	$usrnm = $_POST['usrnm'];
	$pwd = $_POST['pwd'];
	#$cnf_pwd = $_POST['cnf_pwd'];
	$amt = $_REQUEST['cpy_amount'];
	
	$sql = ("insert into `tbl_new_reg` (reg_fname,reg_dob,reg_eml,reg_mbl,reg_usrnm,reg_pwd,reg_amt) values ('$fname','$dob','$eml','$mbl','$usrnm','$pwd','$amt')");
	
	if(!mysqli_query($con,$sql))
	{
		die('Error: '.mysqli_error($con));	
	}
	else
	{
		// the message
		$msg = "Username: ".$usrnm."\nPassword: ".$pwd;

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);

		// send email
		$a = mail($eml,"My Mail sent by php codeing",$msg);
		if($a == 1)
			#echo "<script>window.location.href='index.php'</script>";
			echo "<script>window.location.href='tc.php'</script>";
		else
			echo 'Error';
	}
?>