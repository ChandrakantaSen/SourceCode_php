<?php
    session_start();
?>
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
        <h1>News & Updates</h1>
        <div class="box">
          <p><strong>Section 1</strong></p>
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
        </h3>
        <hr/>
        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <table height="132" border="0" cellpadding="1" cellspacing="1">
            <tr><!-- Old Password -->
                <td width="165">
                    <div align="right">
                    <p><label for="old_pwd"><span class="style3">Old Password:</span>&nbsp;</label>
                    </p>
                    </div>
              </td>
                <td width="446">
                    <div align="left">
                    <input name="old_pwd" type="password" size="40" maxlength="33" />
                    </div>
              </td>
            </tr>
            <tr><!-- New Password -->
                <td>
                    <div align="right">
                    <p><label for="new_pwd"><span class="style3">New Password:</span>&nbsp;</label>
                    </p>
                    </div>
                </td>
                <td>
                  <div align="left">
                    <input name="new_pwd" type="password" size="40" maxlength="33" />
                    <span class="style4">*</span></div>
                </td>
            </tr>					
				<br />
		    <tr>
                <td>
                    <div align="left">&nbsp;</div>
                </td>
                <td>
                    <div align="left">
                    <input name="chngpass" type="submit" value="Submit"/>&nbsp;
                    <input  name="reset" type="reset" value="Reset"/>
                    </div>
                </td>
            </tr>
        </table>
        </form>
        <?php 
            include_once("chngpass_mailer.php");
        ?>
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