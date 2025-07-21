<?php
        session_start();        
        if ($_SESSION['adm_user']){
            print $_SESSION['adm_user'];
        }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="eng" xml:lang="eng">
<head>
	<title>SIS</title>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="css/style0.css" type="text/css"/>
	<link rel="stylesheet" href="css/style1.css" type="text/css"/>
	<link rel="stylesheet" href="css/style_chandra.css" type="text/css"/>
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
			<li><a href="Home.php"> Home </a></li>
			<li><a href="About_Us"> About Us </a></li>
      		<li><a href="#"> Announcemnt </a></li>
			<li><a href="#"> Contact Us </a></li>
            <li><a href="logout_form.php">Log Out</li>
		</div>
	</ul>
	<p>
	  <!-- top menu part -->
	  <!-- left menu part -->
	</p>
	<div class="column-left">
      <h3 class="style2">Administrator</h3>
      <ul class="menu">
        <li><a href="Change__Password.php">Change Password</a></li>
        <li><a href="UserId_Generation.php">UserId Generation</a></li>
        <li><a href="#">Edit Profile</a></li>
        <li><a href="#">Add Administrator</a></li>
        <li>
		<hr align="center" />
        <div>
            <h3 class="style2">Student Profile</h3>
            <ul class="menu">
              <li><a href="Student_MemberArea.php">Add Student</a></li>
              <li><a href="StudentEdit_MemberArea.php">Edit Profile</a></li>
              <li><a href="StudentView_MemberArea.php">View Student</a></li>
              <li><a href="#">Create Course Fees</a></li>
              <li><a href="#">Create Results</a></li>
            </ul>
        </div>
        </li>
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
	  <form id="form1" name="form1" method="" action=""> 
      <table width="448" border="0" align="left" cellpadding="1" cellspacing="1" bgcolor="#FFFFCC">
	  	<tr><!--heading part-->
			<th width="370">
			  <div align="center"><h2 align="center"><span class="style8">Home Page</span></h2></div>
			</th>
		</tr>
	  </table>
      <p><br/></p>
      <table width="977" border="0" align="left" cellpadding="1" cellspacing="1">
	  	<tr>
	  	  <td width="7" bgcolor="#FFFFFF">&nbsp;</td>
	  	  <td width="7" bgcolor="#FFFFFF">&nbsp;</td>
	  	  <td width="7" bgcolor="#FFFFFF">&nbsp;</td>
	  	  <!-- About Us -->
			<td width="896" bgcolor="#FFFFFF">
				<div align="justify">
    			<p>&nbsp;</p>
    			<p>&nbsp;</p>
    			<p>&nbsp;</p>
    			<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
    			<p align="center"><blink><span class="style21">STUDENT INFORMATION SYSTEM</span></blink></p>
    			<p align="center">&nbsp;</p>
    			<p align="center">&nbsp;</p>
				</div>	
            </td>
		</tr>
	  	<tr>
	  	  <td bgcolor="#FFFFFF">&nbsp;</td>
	  	  <td bgcolor="#FFFFFF">&nbsp;</td>
	  	  <td bgcolor="#FFFFFF">&nbsp;</td>
	  	  <td bgcolor="#FFFFFF">&nbsp;</td>
		  <td bgcolor="#FFFFFF">&nbsp;</td>
	  	  <td bgcolor="#FFFFFF">&nbsp;</td>
	  	  <td bgcolor="#FFFFFF">&nbsp;</td>
	  	  <td bgcolor="#FFFFFF">&nbsp;</td>
  	    </tr>
	  </table>
	  </form> 		  
		 <br /><br /><br /><br /><br /><br />
		 <br /><br /><br /><br /><br /><br /><br />
		 <br /><br /><br /><br /><br /><br /><br />
		 <br /><br /><br /><br /><br /><br /><br />
		 <br /><br /><br /><br /><br /><br />
      </div>
<!-- ..............................................codes edit ends..................................................... -->	 
    <!-- footer part -->
    <ul id="navtop" >
		<div align="center">
	    <a href="#">Copyright @ chandrakanta sen </a>
		</div>
	</ul>
</div>
</body>
</html>
