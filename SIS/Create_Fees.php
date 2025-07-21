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
    <style type="text/css"></style>
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
        <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
  <table width="343" border="0">
    <tr>
      <td width="172">Student Id :</td>
      <td width="117"><label for="sid"></label>
      <input type="text" name="sid" id="sid" /></td>
    </tr>
    <tr>
      <td>Total Fees :</td>
      <td><label for="tfees"></label>
      <input type="text" name="tfees" id="tfees" /></td>
    </tr>
    <tr>
      <td>Installment No. :</td>
      <td><label for="Ins_no"></label>
        <select name="Ins_no" id="Ins_no">
          <option value="0">Installment No</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="cfb" id="button" value="Submit" />
        <input type="reset" name="button2" id="button2" value="Reset" />
      </div></td>
    </tr>
  </table>
</form>
<?php
include_once "feesmailer.php";
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
