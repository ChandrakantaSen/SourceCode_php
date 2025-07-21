<?php
    session_start();
    #session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper"> 

  <div id="header"> 

    <div class="top_banner">
      <h1>Student Information Portal</h1>
      <p>Growing up with Education</p>
    </div>

  </div>

  <div id="page_content">

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
            <li><a href="#">Menu Item 1</a></li>
            <li><a href="#">Menu Item 2</a></li>
            <li><a href="#">Menu Item 3</a></li>
            <li><a href="#">Menu Item 4</a></li>
            <li><a href="#">Menu Item 5</a></li>
            <li><a href="#">Menu Item 6</a></li>
            <li><a href="#">Menu Item 7</a></li>
          </ul>
        </div>
      </div>

      <div class="col_1">
        <h1>Block</h1>
        <div class="box">
          <p>Enter Block content here...</p>
          <br>
          <p align="justify">
		     Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
			 Aenean commodo Lorem ipsum dolor sit amet, consectetuer 
			 adipiscing elit. Aenean commodo</p>
        </div>
      </div>

    </div>
    <div class="right_section">
      <div class="common_content">
         <?php
            if ($_SESSION['username'])
            {
                $sncuser=$_SESSION['username'];
                $sncpwd=$_SESSION['password'];
				$sncname=$_SESSION['name'];
        ?>
        <div align="justify">
        <h3>
            <?php 
                echo "<big><strong>Welcome : </strong></big>"."<BIG><big>".$sncname."</big></big>"; 
            }
            ?>
        </h3>
        <hr>
      </div>
    </div>

    <div class="clear"></div>
    
    <!--start footer from here-->
    <div id="footer">Copyright &copy; 2014. Design by <a href="http://www.websitetemplates.org.in" target="_blank">website templates</a><br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--><a href="http://www.websitetemplates.org.in"><img src="images/copyright.gif" class="copyright" alt="websitetemplates.org.in"></a></div>
	
    <!--/. end footer from here-->
  </div>

</div>

</body></html>