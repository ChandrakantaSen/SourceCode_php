<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Untitled Document</title>
	</head>
	
	<body>
		<?php
			$username=mysql_real_escape_string($_POST['username']);
			$password=mysql_real_escape_string($_POST['password']);
			$con=mysql_connect("localhost","root","");
			if(!$con)
			{
				die('could not connect to server:'.mysql_error());
			}
			mysql_select_db("orderonline",$con);
			if(!empty($username)&&!empty($password))
			{
				$query = mysql_query("SELECT * FROM `admin` WHERE `username`='$username'&& `password`='$password'");
				$numrow = mysql_num_rows($query);
				
				if($numrow!=0)
				{
					while($row=mysql_fetch_assoc($query))
					{
						$db_username = $row['username'];
						$db_password = $row['password'];
						$db_name = $row['Name'];
						$db_id = $row['Id'];
					}
					if($username==$db_username&&$password==$db_password)
					{
						session_start();
						$_SESSION['username']=$db_username;
						$_SESSION['Name']=$db_name;
						$_SESSION['Id']=$db_id;
						header("location:memberarea.php");
					}
					else
					{
						echo "incorrect password";
					}
					
				}
				else
				{
					echo "username does not exist";
				}
			}
			else
			{
				echo "All fields are required";
			}
		?>
	</body>
</html>