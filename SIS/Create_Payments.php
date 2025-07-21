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
        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <table width="545" border="0" cellpadding="1" cellspacing="1">
        <tr><!-- fees id -->
			<td width="124">
				<div align="right">
    		  		<p><label for="fees_id">Fees Id:&nbsp;</label></p>
				</div>
		    </td>
		  	<td width="353">
				<div align="justify">
					<input name="fees_id" type="text" size="35" maxlength="33"/>
			    </div>
		    </td>
		</tr>
        <tr><!-- fees amount -->
			<td width="124">
				<div align="right">
    		  		<p><label for="fees_amt">Fees Amount:&nbsp;</label></p>
				</div>
		    </td>
		  	<td width="353">
				<div align="justify">
					<input name="fees_amt" type="text" size="35" maxlength="33"/>
			    </div>
		    </td>
		</tr>
		<tr><!-- payment type -->
			<td>
				<div align="right">
					<p><label for="pmt_type">Payment Type:&nbsp;</label></p>	 
				</div>
			</td>
			<td>
				<div align="justify">
				<select name="pmt_type">
				<option value="0" selected="selected">Type of payments are...</option>
				<option value="reg_fees">Registration Fees</option>
				<option value="inst_fees">Installment Fees</option>
                <option value="crs_fees">Course Fees</option>
				</select>	 
				</div>
			</td>
		</tr>
        <tr><!-- payment mode -->
			<td>
				<div align="right">
					<p><label for="pmt_mode">Payment Mode:&nbsp;</label></p>	 
				</div>
			</td>
			<td>
				<div align="justify">
				<select name="pmt_mode">
				<option value="0" selected="selected">Mode of payments are...</option>
				<option value="cash">Cash Mode</option>
				<option value="cheque">Cheque Mode</option>
				</select>	 
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
        <?php include_once "create_fees_mailer.php"; ?>
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
