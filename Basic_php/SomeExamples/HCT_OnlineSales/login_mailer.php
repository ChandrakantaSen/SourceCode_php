<?php
	include_once('DAO.php');
	$fname = $_POST['fname'];
	#$dob = $_POST['dob'];
	#$gndr = $_POST['gndr'];
	$eml = $_POST['eml'];
	$mbl = $_POST['mbl']
	$usrnm = $_POST['usrnm'];
	$pwd = $_POST['pwd'];
	$cnf_pwd = $_POST['cnf_pwd'];
	$amt = $_REQUEST['amount'];
	if(strcasecmp($pwd,$cnf_pwd) == 0 )
	{
		$sql = ("insert into `tbl_new_reg`(new_fname,new_dob,new_gender,new_email,new_username,new_pwd,new_amt) values ('$fname','$dob','$gndr','$eml','$usrnm','$pwd','$amt')");
		if(!mysqli_query($con,$sql))
			die('Error: '.mysqli_error($con));	
		else
		{
		// the message
			$msg = "Username: ".$usrnm."\nPassword: ".$pwd;

			// use wordwrap() if lines are longer than 70 characters
			$msg = wordwrap($msg,70);

			// send email
			$a = mail($eml,"My subject",$msg);
			if($a == 1)
				echo "<script>window.location.href='index.php'</script>";
			else
				echo 'Error';
		}
	}
	else
		echo "passwords not matched...".$php_errormsg;
?>