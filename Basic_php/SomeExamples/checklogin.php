<?php
	include_once "./include/common_include.php";
	if (isset($_POST['log_but']))
	{
		
		//Get the username and password from the login form
		//Prevent SQL injections
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		$username = stripslashes($username);
		$password = stripslashes($password);
		//$username = mysql_real_escape_string($username);
		//$password = mysql_real_escape_string($password);
		$sql = "SELECT * FROM `official_user` WHERE `User_Email` = '$username' and `User_Passw` = '$password'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$dbusername = $row["User_Name"];
				$dbuseremail = $row["User_Email"];
				$dbpassword = $row["User_Passw"];
				$dbuserid = $row["User_id"];
				$dbuserrole = $row["user_role_id"];
				$dbuserphoto = $row["User_photo"];
				
			}
			
			if ($username == $dbuseremail && $password == $dbpassword)
			{	
				
				$_SESSION['uname'] = $dbusername;
				$_SESSION['password'] = $dbpassword;
				$_SESSION['mail'] = $dbuseremail;
				$_SESSION['uid'] = $dbuserid;
				$_SESSION['usr_role'] = $dbuserrole;
				$_SESSION['prof_dp'] = $dbuserphoto;
				header ("location:mypage.php") ;  //Change the header location...                        
			}
			
			} else {
			echo "<p>Wrong User Name or Password</p>";
		}
	}
	ob_end_flush();
?>