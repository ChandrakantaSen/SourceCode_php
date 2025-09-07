
<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to Kahini Hotel Digha</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
</head>

<body>


	      <div id="wrapper">
		  <img id="default-logo" src="images/sreehotel.jpg" alt="Starhotel" style="height:100px;"> 
					<h2 class="accordion-header" align="center" style="height: 30px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Admin Login</h2>
					<div class="accordion-content" style="margin-bottom: 15px;"><br/><br/>
					    <form name="testForm" id="testForm" action="login.php" method="post">
							<h2 style="padding-left:4px" align="center">Your Login Details :</h2>
							
							
								<div align="center">
								<p style="color:red"> USERNAME*</p>
									<input type="text" name="user" class="form-control" required="required" >
								</div>
								<br />
								<div align="center">
								<p style="color:red">PASSWORD *</p>
									<input type="password" name="password"  class="form-control" required="required">
								</div>
								<br />
								
								<div style="text-align:center">
									<!--<textarea class="form-control" placeholder="Comment" cols="50" style="height:200px;"></textarea>-->
									<button type="submit" value="submit" class="btn btn-default">login</button>
								</div>
							         
					    </form>
							
						
					</div>
						
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
	  </div>
	

               
</body>
</html>
