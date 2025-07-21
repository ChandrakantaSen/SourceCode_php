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
            <li><a href="Add_Student.php">Student Registration</a></li>
            <li><a href="Edit_Profile_Std.php">Edit Profile</a></li>
            <li><a href="View_Profile_Std.php">View Details</a></li>
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>
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
        <form>
            <table border="1">
                <tr>
                    <td>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                           Aenean commodo Lorem ipsum dolor sit amet, consectetuer 
                           adipiscing elit. Aenean commodo.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>000</td>
                    <td>555</td>
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