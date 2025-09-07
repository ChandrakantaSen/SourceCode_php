<?php
    session_start();
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
  <!--*** Navigation Part ***-->
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
        <?php
            /**********************************/
            /* Database Connection as DAO.php */
            /**********************************/
            include_once("DAO.php");
            
            /*****************************/
            /*    Post data Variable     */
            /*****************************/
            $frmno = $_POST['frmno']; 
            
            $result = mysql_query("SELECT distinct * FROM `lmiit_stdnt` WHERE `stdnt_form_no` = '$frmno'");
            if(!$result)
            {
                die('Error:'.mysql_error());
            }
            
            /****************************/
            /* View data as HTML Table  */  
            /****************************/
            
            echo "<table border='1' width='870'>
                   <tr height='15'>
                     <th width='100'>Id</th>        
                     <th width='100'>Name</th> 
                     <th width='100'>Dob</th>
                     <th width='100'>Sex</th>
					 <th width='100'>Address</th> 
					 <th width='100'>Course</th>
                     <th width='100'>Mob</th>
                     <th width='100'>Image</th>
                   </tr>";       
                while($row = mysql_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" . $row['stdnt_id']      .   "</td>";
                echo "<td>" . $row['stdnt_name']    .   "</td>";
                echo "<td>" . $row['stdnt_dob']     .   "</td>";
                echo "<td>" . $row['stdnt_sex']     .   "</td>";
                echo "<td>" . $row['stdnt_address'] .   "</td>";    
                echo "<td>" . $row['stdnt_course']  .   "</td>";
                echo "<td>" . $row['stdnt_mob']     .   "</td>"; 
                echo "<td><img src = 'Upload_Images/".$row['stdnt_image']." ' width='200px' height='150px' '/></td>";
                echo "</tr>";
            }
            echo"</table>";
        ?>
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