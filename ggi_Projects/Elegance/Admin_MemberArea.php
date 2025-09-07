<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="eng" xml:lang="eng">
<head>
	<title>SIS</title>
    <meta http-equiv="refresh">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />1
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
			<li><a href="index.html"> Home </a></li>
      		<li><a href="#"> About Us </a></li>
      		<li><a href="#"> Contact Us </a></li>
			<li><a href="#"> Announcement </a></li>
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
    <!-- ******** php codes for printing the name ****** -->
    <?php
        session_start();
        if ($_SESSION['username'])
        {
            $sncname=$_SESSION['username'];
            echo "<strong>Wecome to </strong>".$sncname;
            echo "<h1>Successfully logged in...</h1>";
            echo "<br/><a href='logout_form.php'>Log Out</a></b>";
        }
    ?>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
<!-- ........................................code edit starts.......................................................... -->
      <div id="skip-menu"></div>
      <div class="box">
      <div class="box-top"></div>
	  <div class="box-in">
   	  <form id="form1" name="form1" method="post" action="Insert_lmiit_stdnt.php" enctype="multipart/form-data"> 
      <table width="448" border="0" align="left" cellpadding="1" cellspacing="1" bgcolor="#FFFFCC">
	  	<tr><!--heading part-->
			<th width="370">
			  <div align="center">
				  <h2 align="center"><span class="style8"> Student Registration Form: </span></h2>
			  </div>
			</th>
		</tr>
	  </table>
      <p><br />
      </p>
      <table width="954" height="403" border="0" align="left" cellpadding="1" cellspacing="1">
	  	<tr><!-- Name -->
			<td width="217">
				<div align="right">
    			<p><label for="name"><span class="style3">Name:&nbsp;</span></label></p>
				</div>
		  </td>
		  	<td width="682">
				<div align="justify">
				<input name="name" type="text" class="style3" size="35" maxlength="33" placeholder="Enter the name..."/>
			  </div>
		  </td>
		</tr>
		<tr><!-- DOB -->
			<td>
				<div align="right">
				<p>
				  <label for="dob"><span class="style3">Dob:&nbsp;</span></label>
				</p>  
				</div>
			</td>
			<td><!--date-->
			  <div align="justify">
				<input name="day" type="text" class="style3" size="15" maxlength="2" placeholder="Enter the day..." />
				&nbsp;&nbsp;
				<label>
                  <select name="month" class="style3">
                  <option value="" selected="selected">Select the month...</option>
                  <option  value="01">January</option>
                  <option value="02">February</option>
                  <option value="03" >March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
			      </select>
                </label>&nbsp;&nbsp;
				<input name="year" type="text" class="style3" maxlength="4" placeholder="Enter the year..." />&nbsp;&nbsp;
			  </div>
			</td>
		</tr>
		<tr><!--sex-->
			<td>
				<div align="right">
					<p><label for="sex"><span class="style3">Sex:&nbsp;</span></label></p>	
				</div>
			</td>		
			<td>
				<div align="justify" class="style3">
					<select class="style3" name="sex">
					<option value="select" selected="selected">I am...</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="others">Others</option>
					</select>	 
			  </div>
			</td>
		</tr>
		<tr><!--course-->
			<td>
				<div align="right">
					<p><label for="course"><span class="style3">Course:&nbsp;</span></label></p>	 
				</div>
			</td>
			<td>
				<div align="justify">
				<select class="style3" name="course">
				<option value="select" selected="selected">I am appling for...</option>
				<option value="C">C</option>
				<option value="C++">C++</option>
				<option value="Java">Java</option>
				<option value="Oracle">Oracle</option>
				<option value="php">php & Mysql</option>
				<option value="others">Other</option>
				</select>	 
				</div>
			</td>
		</tr>
		<tr><!--mobile-->
			<td height="50">
				<div align="right">
					<p><label for="phone"><span class="style3">Mobile Phone:&nbsp;</span></label></p> 
				</div>
		  </td>
			<td>
				<div align="justify">
				<input id="mob" name="mob" placeholder="Enter the mobile no..." type="text" class="style3" maxlength="12"/> 
				</div>
			</td>
		</tr>
		<tr><!--Address-->
			<td height="119">
				<div align="right">
					<p><label for="address"><span class="style3">Address:&nbsp;</span></label></p> 
				</div>
		  </td>
			<td>
				<div align="justify">
				<textarea name="address" cols="32" rows="6" class="style3" placeholder="Enter the address..."></textarea>
				</div>
			</td>
		</tr>
		<tr><!--Image-->
			<td>
				<div align="right">
					<p><label for="image"><span class="style3">Image:&nbsp;</span></label></p> 
				</div>
			</td>
			<td>
				<div align="justify">
				<input name="image" type="file" class="style3" size="35" maxlength="32" placeholder="Browse Image here..."/>
				</div>
			</td>
		</tr>
				<!--*********************************************************-->
				<br /><br />
				<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
				<!--*********************************************************-->
		<tr>
			<td>
				<div align="left">&nbsp;</div>
			</td>
			<td>
				<div align="left">
				<input name="submit" type="submit" class="submitbutton" value="Submit"/>
				&nbsp;
				<input  name="reset" type="reset" class="submitbutton"  value="Reset"/>
				</div>
			</td>
		</tr>
	  </table>
	  </form> 		
		
		   <p>
		     <br />
		   	 <br /> 
		     <br />
		     <br /> 
		     <br />
		     <br /> 
		     <br />
		     <br />
		       <br />
		     <br />
		       <br />
		     <br />
		       <br />
		     <br /> <br />
		       <br />
		     <br />
		       <br />
		       <br /><br /><br /><br />
	    </p>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
	  </div>
	  </div>
<p>
  <!-- ..............................................codes edit ends..................................................... -->	 
  <!-- footer part -->
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<ul id="navtop" >
		<div align="center">
	    <strong>Copyright @ Chandrakanta Sen</strong>
		</div>
</ul>
	
</body>
</html>

