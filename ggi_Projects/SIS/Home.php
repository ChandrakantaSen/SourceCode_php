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
      </ul>
    </div>

    <div class="left_side_bar"> 

      <div class="col_1">
        <h1>Main Menu</h1>
        <div class="box">
          <ul>
            <li><a href="Create_Fees.php">Create Fees</a></li>
            <li><a href="Create_Payments.php">Make Payments</a></li>
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
        </div>
        <hr>
        <p align="justify">Lorem ipsum dolor sit amet, consectetuer 
			adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum 
			sociis natoque penatibus et magnis dis parturient montes, nascetur 
			ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
			quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
			vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, 
			imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis 
			pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
			Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, 
			consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, 
			viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
			laoreet. Quisque rutrum. Aenean imperdiet.</p>
        </div>
      <div class="top_content">
        <div class="column_one">
          <h2>Subscription</h2>
          <p align="justify">
		    <strong>Etiam ultricies nisi vel augue. Curabitur ullamcorper 
			ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus 
			eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing 
			sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, 
			hendrerit id, lorem. Maecenas nec odio et ant.</strong></p>
          <br>
          <p><a class="btn" href="#">Read more</a></p></div>
        <div class="column_two border_left">
          <h2>Other Services</h2>
          <p align="justify">
		     <strong>Etiam ultricies nisi vel augue. Curabitur ullamcorper 
			 ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus 
			 eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing 
			 sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, 
			 hendrerit id, lorem. Maecenas nec odio et ant.</strong></p>
          <br>
          <p><a class="btn" href="#">Read more</a></p></div>
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
