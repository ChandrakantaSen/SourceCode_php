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
        <li><a href="UserId_Generation.php">UserId Generation</a></li>
        <li><a href="#">Edit Profile</a></li>
        <li><a href="#">Add Administrator</a></li>
        <li>
		<hr align="center" />
        <div>
            <h3 class="style2">Student Profile</h3>
            <ul class="menu">
              <li><a href="Student_MemberArea.php">Add Student</a></li>
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
	<form id="form1" name="form1"> 
      <table width="448" border="0" align="left" cellpadding="1" cellspacing="1" bgcolor="#FFFFCC">
	  	<tr><!--heading part-->
			<th width="370">
			  <div align="center">
				  <h2 align="center"><span class="style8">After Student Registration</span></h2>
			  </div>
			</th>
		</tr>
	  </table>
      <p><br /></p><!--heading part ends-->
      <div align="center">
      	<table align="center" border="1" cellpadding="1" cellspacing="1">
			<tr align="justify">
<!--::::::::::::::::::::::::::::::::::::::::: php codes starts :::::::::::::::::::::::::::::::::::::::::::::::::-->                
        <?php
            /**********************************/
            /* Database Connection as DAO.php */
            /**********************************/
            include_once("DAO.php");
            echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
            print '<h1><marquee> Data Table Details </marquee></h1>';
            
            /*****************************/
            /* Insert data into database */
            /*****************************/
            $nm = $_POST['name'];
            $dy = $_POST['day'];
            $mn = $_POST['month'];
            $yr = $_POST['year'];
            $dob = $yr."/".$mn."/".$dy;
            $sx = $_POST['sex'];
            $add = $_POST['address'];
            $crs = $_POST['course'];
            $mob = $_POST['mob'];
                       
            /*****************************/
            /*  Form No Auto Generation  */
            /*****************************/
            $frmno = Ucfirst("stu").strtolower(substr($nm,0,3))."@".substr($dob,-2,3).substr($mob,3,2);
            
            /****************/
            /* Image Upload */
            /****************/
            $imgname = "";
            
            if ($_FILES['image']['name']!=="")
            {
                $imgname = "imgupload_".$_FILES['image']['name'];
                $imgplace = "Upload_Images/".$imgname;
                copy($_FILES['image']['tmp_name'],$imgplace);    
            }
            else
                echo "Null Image Name...";
            
            $sql = "INSERT INTO `lmiit_stdnt` 
                           ( `stdnt_id`
                           , `stdnt_name`
                           , `stdnt_dob`
                           , `stdnt_sex`
                           , `stdnt_address`
                           , `stdnt_mob`
                           , `stdnt_course`
                           , `stdnt_form_no`
                           , `stdnt_image`
                           , `stdnt_date` ) 
                    VALUES 
                           ( ''
                           , '$nm'
                           , '$dob'
                           , '$sx'
                           , '$add'
                           , '$mob'
                           , '$crs'
                           , '$frmno'
                           , '$imgname'
                           ,  now() )";
            
                if(!mysql_query($sql,$con)){
                    die('Error:'.mysql_error());
                }
                mysql_close($con);    
        ?>
<!--::::::::::::::::::::::::::::::::::::::::::: php code ends ::::::::::::::::::::::::::::::::::::::::::::::-->               			
            </tr>
		</table>
      </div>
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
