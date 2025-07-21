<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="eng" xml:lang="eng">
<head>
	<title>SIS</title>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="css/style0.css" type="text/css"/>
	<link rel="stylesheet" href="css/style1.css" type="text/css"/>
	<link rel="stylesheet" href="css/style_chandra.css" type="text/css"/>
    <style type="text/css">
	<!--
	.style1 {font-family: "Courier New", Courier,monospace; font-size: medium;}
	.style2 {color: #FFCC00;}
.style9 {
	font-size: large;
	font-weight: bold;
}
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
	<p>
	  <!-- top menu part -->
	  <!-- left menu part -->
	</p>
	<ul id="navtop">
		<div align="center">
			<li><a href="Home.php"> Home </a></li>
			<li><a href="About_Us"> About Us </a></li>
      		<li><a href="#"> Announcemnt </a></li>
			<li><a href="#"> Contact Us </a></li>
            <li><a href="logout_form.php">Log Out</li>
		</div>
	</ul>
	</p>
	<div class="column-left">
      <h3 class="style2">Administrator</h3>
      <ul class="menu">
        <li><a href="Change__Password.php">Change Password</a></li>
        <li><a href="#">UserId Generation</a></li>
        <li><a href="#">Edit Profile</a></li>
        <li><a href="#">Add Administrator</a></li>
        <li>
		<hr align="center" />
        <div>
            <h3 class="style2">Student Profile</h3>
            <ul class="menu">
              <li><a href="#">Add Student</a></li>
              <li><a href="#">Edit Profile</a></li>
              <li><a href="#">View Student</a></li>
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
		<form id="form1" name="form1" method="post" action="Elegance/Insert_lmiit_stdnt.php" enctype="multipart/form-data"> 
      <table width="448" border="0" align="left" cellpadding="1" cellspacing="1" bgcolor="#FFFFCC">
	  	<tr><!--heading part-->
			<th width="370">
			  <div align="center">
				  <h2 align="center"><span class="style8">UserId Genration</span></h2>
			  </div>
			</th>
		</tr>
	  </table>
      <p><br /></p>
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
    			<p><span class="style9"><?php include_once "test.php" ?></span></p>
				</div>	
            </td>
		</tr>
	  	<tr>
	  	  <td bgcolor="#FFFFFF">&nbsp;</td>
	  	  <td bgcolor="#FFFFFF">&nbsp;</td>
	  	  <td bgcolor="#FFFFFF">&nbsp;</td>
	  	  <td bgcolor="#FFFFFF">&nbsp;</td>
  	    </tr>
	  </table>
		</form> 		  
		 <br /><br /><br /><br /><br /><br /><br /><br />
		 <br /><br /><br /><br /><br /><br /><br /><br />
		 <br /><br /><br /><br /><br /><br /><br /><br />
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
