<?php
    session_start();
    #session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Home</title>
<meta name="description" content="A description of your website" />
<meta name="keywords" content="keyword1, keyword2, keyword3" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="wrapper"> 

  <div id="header"> 
    <div class="top_banner">
      <h1>Student Information Portal</h1>
      <p>Growing up with Education</p>
    </div>
  </div>
<!-- ****** start codes edit from here ****** -->
<div id="page_content">
  <!--*** Navigation Part ***-->
  <div class="navigation" align="center">
       <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="About_Us.php">About Us</a></li>
        <li><a href="Administrator.php">Administrator</a></li>
        <li><a href="Student.php">Student</a></li>
        <li><a href="Contact_Us.php">Contact Us</a></li>
        <li><a href="Logout.php">Logout</a></li>
      <!--  <li><a href="#">New Page 4</a></li> -->
      </ul>
  </div>
  <div class="left_side_bar"> 
      <div class="col_1">
        <h1>Main Menu</h1>
        <div class="box">
          <ul>
            <li><a href="ChangePwd.php">Change Password</a></li>
            <li><a href="UserIdGen.php">UserId Generation</a></li>
            <li><a href="Add_Administrator.php">Add Administrator</a></li>
            <li><a href="Edit_Profile_Admin.php">Edit Profile</a></li>
            <li><a href="View_Profile_Admin.php">View Details</a></li>
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>
          </ul>
        </div>
      </div>

      <div class="col_1">
        <h1>Block</h1>
        <div class="box">
          <p>Enter Block content here...</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
             Aenean commodo Lorem ipsum dolor sit amet, consectetuer 
             adipiscing elit. Aenean commodo.</p>
        </div>
      </div>

    </div>
  <!--*** Navigation Part ***-->
<div class="right_section">
    <div class="common_content">
        <?php
            if ($_SESSION['username'])
            {
                $sncuser=$_SESSION['username'];
                $sncpwd=$_SESSION['password'];
				$sncname=$_SESSION['name'];
        ?>
        <h3> 
        <?php 
                echo "<big><strong>Welcome : </strong></big>"."<BIG><big>".$sncname."</big></big>"; 
            }
        ?>
        </h3><hr/>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <form  name="form1" method="post" action="#" enctype="multipart/form-data">
            <table width="545" border="0" align="left" cellpadding="1" cellspacing="1">
                <tr><!-- Name -->
			<td width="124">
				<div align="right">
    		  		<p><label for="name">Name:&nbsp;</label></p>
				</div>
		    </td>
		  	<td width="353">
				<div align="justify">
					<input name="name" type="text" size="35" maxlength="33"/>
			    </div>
		    </td>
		</tr>
		<tr><!-- DOB -->
			<td>
				<div align="right">
				<p>
				  <label for="dob">Dob:&nbsp;</label>
				</p>  
				</div>
			</td>
			<td><!--date-->
			    <div align="justify">
				<input name="day" type="text" size="15" maxlength="2"/>
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
				<input name="year" type="text" maxlength="4"/>&nbsp;&nbsp;
   			    </div>
			</td>
		</tr>
		<tr><!--sex-->
			<td>
				<div align="right">
					<p><label for="sex">Sex:&nbsp;</label></p>	
				</div>
			</td>		
			<td>
				<div align="justify">
					<select name="sex">
					<option value="select" selected="selected">I am...</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="others">Others</option>
					</select>	 
			    </div>
			</td>
		</tr>
		<tr><!--course-->
			<!--<td>
				<div align="right">
					<p><label for="course">Specialization:&nbsp;</label></p>	 
				</div>
			</td>
			<td>
				<div align="justify">
				<select name="course">
				<option value="select" selected="selected">I am appling for...</option>
				<option value="C">C</option>
				<option value="C++">C++</option>
				<option value="Java">Java</option>
				<option value="Oracle">Oracle</option>
				<option value="php">php & Mysql</option>
				<option value="others">Other</option>
				</select>	 
				</div>
			</td> -->
		</tr>   
		<tr><!--mobile-->
			<td height="33">
				<div align="right">
					<p><label for="phone">Mobile Phone:&nbsp;</label></p> 
				</div>
		  </td>
			<td>
				<div align="justify">
    				<input id="mob" name="mob" type="text" maxlength="10"/> 
				</div>
			</td>
		</tr>
		<tr><!--Address-->
			<td height="105">
				<div align="right">
				  <p>Address:&nbsp;</label></p> 
				</div>
		    </td>
			<td>
				<div align="justify">
					<textarea name="address" cols="32" rows="6"></textarea>
				</div>
			</td>
		</tr>
		<tr><!--Image-->
			<td>
				<div align="right">
					<p><label for="image">Image:&nbsp;</label></p> 
				</div>
			</td>
			<td>
				<div align="justify">
				<input name="image" type="file" size="35" maxlength="32"/>
				</div>
			</td>
		</tr>
				<!--*********************************************************
				<br /><br />
				<tr><td>&nbsp;</td>
				</tr>
					*********************************************************-->
		<tr><!-- Buttons (Submit & Reset) -->
			<td>
				<div align="left">&nbsp;</div>
			</td>
			<td>
				<div align="left">
				<input name="submit" type="submit" value="Submit"/>
				&nbsp;
				<input  name="reset" type="reset" value="Reset"/>
				</div>
			</td>
		</tr>
            </table>
        </form>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    </div> 
</div>
<!-- ****** end codes edit from here ****** -->
    
    <div class="clear"></div>  
    <!--start footer from here-->
        <div id="footer">Copyright &copy; 2014. Design by <a href="#" target="_blank">website templates</a><br />
    <!--DO NOT remove footer link-->
    
    <!--Template designed by-->
        <a href="#"><img src="images/copyright.gif" class="copyright" alt="#" /></a></div>
    <!--/. end footer from here-->
    
  </div>
</div>
</body>
</html>