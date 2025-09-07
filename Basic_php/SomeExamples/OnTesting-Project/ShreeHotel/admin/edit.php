<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:../admin.php");
}
require_once('../connection.php');
$visitor_id = $_REQUEST['id'];
$total_rate = $_REQUEST['rate'];
//searching visitor details
$search_query = "select * from visitor_details where id = '".$visitor_id."'";
$run_query = mysqli_query($conn, $search_query);
if(!$run_query)
{
  echo mysqli_error($conn);
  die();
}
$visitor_details =  mysqli_fetch_array($run_query);
//end of searching visitor details

//fetch payment of individual 
$search_payment = "select * from booking_details where c_id = '".$visitor_id."'";
$run_search_payment = mysqli_query($conn, $search_payment);
if(!$run_search_payment)
{
	die(mysqli_error($conn));
}
$payment_details = mysqli_fetch_array($run_search_payment);
//end of payment fetch

if(isset($_POST['submit']))
{
$name = $_POST['visitor_name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$payment = $_POST['payment'];
//visitor details update
$update_visitor = "update visitor_details set name = '".$name."', address = '".$address."', contact = '".$contact."', email = '".$email."' where id = '".$visitor_id."'";
$run_update_visitor = mysqli_query($conn, $update_visitor);
if(!$run_update_visitor)
{
  echo mysqli_error($conn);
  die();
}

$update_booking = "update booking_details set payment = '".$payment."' where c_id = '".$visitor_id."' ";
$run_update_booking = mysqli_query($conn, $update_booking);
if(!$run_update_booking)
{
	die(mysqli_error($conn));
}

//header("location:dashboard.php");
echo "<script>window.location.href='dashboard.php';</script>";
}
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>	
<script type="text/javascript">
function validateForm()
{
var a=document.forms["addroom"]["type"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the room type");
  return false;
  }
var b=document.forms["addroom"]["rate"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the room rate");
  return false;
  }
 var c=document.forms["addroom"]["rnum"].value;
if (c==null || c=="")
  {
  alert("Pls. enter the room number");
  return false;
  }
var d=document.forms["addroom"]["desc"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the room description");
  return false;
  }
 
/*if (c.which!=8 && c.which!=0 && (c.which<48 || c.which>57))
  {
  alert("The input U enter in Quantity field is not valid, only numbers are accepted (ex. 1, 2, 3, 4.......)");
  return false;
  }
if (b.which!=8 && b.which!=0 && (b.which<48 || b.which>57))
  {
  alert("The input U enter in Quantity field is not valid, only numbers are accepted (ex. 1, 2, 3, 4.......)");
  return false;
  }*/
}
</script>

<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
 <script type="text/javascript">
function validation()
{
	var rate;
	rate = "<?php echo $total_rate; ?>";
	var new_payment;
	new_payment = document.addvisitor.payment.value;
	if(rate<new_payment || new_payment<0)
	{
		alert('Amount Mismatch \nMain amount '+ rate);
		document.addvisitor.payment.value = "";
		return false;
	}
}
 </script>
   </head>
<body>
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom"><br/>
				<img id="default-logo" src="../images/kahini.png" alt="Starhotel" style="height:44px;"> 
				<a href="Documentation" target="_blank"><font color="red">Site Help</font></a>
				&nbsp;<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter">
					Hi
					<!--<strong> Admin</strong>-->
					<strong> <?php $id = $_SESSION['user'];
					$qry = mysqli_query($conn,"SELECT * FROM tbl_admin WHERE id='$id'");
					$result = mysqli_fetch_array($qry);
					echo $result['username'];?></strong>
					<br>
					
					<a class="alight" href="dashboard.php">Visit website</a>
					|
					<a class="alightred" href="logout.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a href="dashboard.php">
							<img alt="Dashboard" src="img/m-dashboard.png">
							<span>Visitor Details</span>
						</a>
					</li>
					<li>
						<a href="user.php">
							<img alt="Users" src="img/m-users.png">
							<span>Users</span>
							<span class="submenu-arrow"></span>
						</a>
					</li>
					<li>
						<a href="message.php">
							<img alt="Newsletter" src="img/m-newsletter.png">
							<span>Contact Details</span>
						</a>
					</li>
					<li>
						<a href="rooms.php">
							<img alt="Statistics" src="img/m-statistics.png">
							<span>Rooms</span>
						</a>
					</li>
					<li>
						<a href="cust_booking.php">
							<img alt="Dashboard" src="img/m-dashboard.png">
							<span>Customer Booking</span>
						</a>
					</li>
					
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
                 <table cellpadding="1" cellspacing="1" id="resultTable">
				    <form method="post" name="addvisitor">
						 Name<br />
						 <input type="text" name="visitor_name" class="ed" value="<?php echo $visitor_details['name']; ?>">
						  <br />
						  Address <br />
						  <textarea name="address" class="ed"><?php echo $visitor_details['address']; ?></textarea>
						  <br />
						  Contact <br />
						  <input type="text" name="contact" class="ed" value="<?php echo $visitor_details['contact']; ?>">
						  <br />
						  Email <br />
						  <input type="email" name="email" class="ed" value="<?php echo $visitor_details['email']; ?>"> <br />
						  Payment <br>
						  <input type="number" name= "payment" class="ed" value ="<?php echo $payment_details['payment']; ?>" onchange="return validation();"><br>	
						<!-- Room Image: <br /><input type="file" name="image" class="ed"><br />-->
						 
							<input type="submit" name="submit" value="Update" id="button1" />
						 
					</form>
					</table>
				
                </div>
				
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	
</body>
</html>