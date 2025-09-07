<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="eng" xml:lang="eng">
<head>
	<title>SIS</title>
    <meta http-equiv="refresh" content="1; URL=index.php">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="css/style0.css" type="text/css"/>
	<link rel="stylesheet" href="css/style1.css" type="text/css"/>
	<link rel="stylesheet" href="css/style_chandra.css" type="text/css"/>
    <style type="text/css">
	<!--
	.style1 {font-family: "Courier New", Courier,monospace; font-size: medium;}
	.style2 {color: #FFCC00;}
	-->
    </style>
</head>
<body>
	<!-- heading part -->
	<a name="top"></a>
	<div id="header">
		<div class="gallery">
		  <div align="center"><strong>Student Information System</strong></div>
		</div>
	</div>
	<!-- heading part -->
	<!-- top menu part -->
	<ul id="navtop">
		<div align="center">
			<li><a href="index.html"> Home </a></li>
      		<li><a href="#"> About Us </a></li>
      		<li><a href="#"> Contact Us </a></li>
      		<li><a href="#"> Announcemnt </a></li>
		</div>
	</ul>
	<p>
	  <!-- top menu part -->
	  <!-- left menu part -->
	</p>
	<div class="column-left">
      <h3 class="style2">Administrator</h3>
      <ul class="menu">
        <li><a href="#">Change Password</a></li>
        <li><a href="#">UserId Generation</a></li>
        <li><a href="#">Edit Profile</a></li>
        <li><a href="#">Add Administrator</a></li>
      </ul>
    </div>
	<hr align="center" color="#333333"class="style1" />
	<!-- left menu part -->
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
	
<!-- ........................................code edit starts.......................................................... -->
      <div id="skip-menu"></div>
      <div class="box">
      <div class="box-top"></div>
      <div class="box-in">
		<form id="form1" name="form1"> 
        <table width="802" height="208" border="0" align="left" cellpadding="1" cellspacing="1">
	  	<tr><!-- Logged Out -->
		  	<td width="719">
				<div align="center">
				<?php
                        session_start();
                        session_destroy();
                        echo "<b>You Have Been Successfully Logged Out. <br/>Please Wait.........</b>";
                ?>
			  </div>
	      </td>
		</tr>
	  </table>
      <p><br /></p>
	  </form> 		  
		 <br /><br /><br /><br /><br /><br /><br /><br />
		 <br /><br /><br /><br /><br /><br />
		 <br /><br /><br /><br /><br /><br /><br /><br />
      </div>
<!-- ..............................................codes edit ends..................................................... -->	 
    <!-- footer part -->
    <ul id="navtop" >
		<div align="center">
	    <a href="#">Copyright @ chandrakanta sen </a>
		</div>
	</ul>
	
</div></body>
</html>
