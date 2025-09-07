<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style3 {font-size: medium; font-weight: bold; }
.style4 {color: #FF0000}
-->
</style>
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
            <li><a href="#">Change Password</a></li>
            <li><a href="#">UserId Generation</a></li>
            <li><a href="#">Add Administrator</a></li>
            <li><a href="#">Edit Profile</a></li>
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
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
             Aenean commodo Lorem ipsum dolor sit amet, consectetuer 
             adipiscing elit. Aenean commodo.</p>
        </div>
      </div>

    </div>
    
    <!-- ****** start codes edit from here ****** -->
    <div class="right_section">
      <div class="common_content">
        <h2>UserId Generation:</h2>
        <hr/>
        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <table height="132" border="0" cellpadding="1" cellspacing="1">
            <tr>
                <td>UserId Generation Page</td>
            </tr>
        </table>
        </form>
      </div>
    </div>
    <!-- ****** end codes edit from here ****** -->
    
    <div class="clear"></div>
    
    <!--start footer from here-->
        <div id="footer">Copyright &copy; 2014. Design by <a href="#" target="_blank">website templates</a><br>
    <!--DO NOT remove footer link-->
    
    <!--Template designed by-->
        <a href="#"><img src="images/copyright.gif" class="copyright" alt="#"></a></div>
    <!--/. end footer from here-->
    
  </div>
</div>
</body>
</html>