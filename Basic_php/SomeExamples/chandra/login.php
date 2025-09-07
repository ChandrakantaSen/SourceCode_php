<?php

	$amount = $_REQUEST['amount'];
	#echo $amount;
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
		
		<!--Date Picker-->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script>
			$(function() {
				$( "#datepicker" ).datepicker({dateFormat: "dd/mm/yy",maxDate: "+0d"});
			});
		</script>
		<!--Date Picker-->
		<!--Google reCaptcha-->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!--Google reCaptcha-->
		<style type="text/css">
		.auto-style1 {
				margin-right: 0;
				margin-top: 0;
		}
		.auto-style2 {
				margin-top: 23px;
		}
		</style>
</head>
<body>
	<div class="main">
		<div class="header" >
			<h1>*** Login or Create an Account ***</h1>
		</div>
		<p>Please enter all details carefully</p>
			<form name="frm_reg" method="post" action="loginMailer.php?cpy_amount=<?php echo $amount ?>"> 
				<ul class="left-form">
					<h2>New Account:</h2>
					<li>
						<input type="text" name="fname" placeholder="Name" required style="width: 88%"/>
						<div class="clear"> </div>
					</li>
					<li>
						<input type="text" name="dob" placeholder="DOB (dd/mm/yy)" id="datepicker" required style="width: 88%"/>
						<div class="clear"> </div>
					</li>
					<li>
						<input type="email" name="eml" placeholder="Email" required style="width: 88%"/>
						<div class="clear"> </div>
					</li>
					<li>
						<input type="text" name="mbl"  placeholder="Mobile No" required style="width: 88%"/>
						<div class="clear"> </div>
					</li>
					<li>
						<input type="text" name="usrnm" placeholder="Username" required style="width: 88%"/>
						<div class="clear"> </div>
					</li> 
					 
					<li>
						<input type="password" name="pwd"  placeholder="password" required style="width: 88%"/>
						<div class="clear"> </div>
					</li> 
					<!--<li>
						<input type="password"  name="cnf_pwd" placeholder="password" required/>
						<div class="clear"> </div>
					</li>--> 
					<!-- google recaptcha -->
					<div class="g-recaptcha" data-sitekey="6Ld5SxwTAAAAAEf6bgRYk3CdioRjkiwmT1T9_kB0"></div>
					<!-- google recaptcha -->
					<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i>&nbsp;Please check to get an email</i></label>
					<div class="clear"> </div>
					<input type="submit" onclick="myFunction()" name="reg_submit" value="Create Account" class="auto-style2">
					<div class="clear"> </div>
				</ul>
			</form>
			<!--Vertical Line-->
			<div style="width:50px; height:439px; float:left; padding-top:30px; padding-left:55px; ">
			<img src="images/line.png" width="5" height="350" class="auto-style1"/></div>
			<!--Vertical Line-->
			<form name="frm_login" method="post" action="#">
				<ul class="right-form">
					<h3>Login:</h3>
					<div>
						<li><input type="text"  placeholder="Username" required/></li>
						<li> <input type="password"  placeholder="Password" required/></li>
						<h4>I forgot my Password!</h4>
							<input type="submit" onclick="myFunction()" name="log_submit" value="Login" >
					</div>
					<div class="clear"> </div>
				</ul>
				<div class="clear"> </div>
					
			</form>
			
		</div>
			<!-----start-copyright---->
   					<div class="copy-right">
						<p>Template by <a href="http://w3layouts.com">w3layouts</a></p> 
					</div>
				<!-----//end-copyright---->

	
</body>
</html>