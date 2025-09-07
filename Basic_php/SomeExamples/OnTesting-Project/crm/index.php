<?php
session_start();
require "include/connection.php";
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$search_query = "select * from tbl_admin where username = '".$username."' && password = '".$password."'";
	$run_query = mysqli_query($connection, $search_query);
	$admin_details = mysqli_fetch_array($run_query);
if(!$run_query)
{
	echo mysqli_error($connection);
	die();
}
if(mysqli_num_rows($run_query)>0)
{
	$_SESSION['admin_id'] = $admin_details['id'];
	$_SESSION['admin'] = $admin_details['username'];
	header("location:dashboard.php");
	
	
}
else
{
	echo "<script>alert('Credential Problem!');</script>";
}
}

?>
<html>
<head><title>Admin Login</title>
<script type="text/javascript">
function validation()
{
	var username = document.admin_login.username.value;
	var password = document.admin_login.password.value;
	if(username==""||password=="")
	{
		alert("All fields required!");
		return false;
	}
}
</script>
</head>
<body>
<form name="admin_login" method="post">
<table align="center">
	<tr><th>Admin Login Desk</th></tr>
<tr><td><input type="text" name="username" placeholder="Username" autofocus></td></tr>
<tr><td><input type="password" name="password" placeholder="Password"></td></tr>
<tr><td align="center"><input type="submit" name="submit" value="Login" onclick="return validation();"></td></tr>
</table>
</form>
</body>
</html>