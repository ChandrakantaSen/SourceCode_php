<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		header("location:../admin.php");
	}
	require_once('../connection.php');
	$room_num = $_REQUEST['room_num'];
	$check_in = new DateTime($_REQUEST['check_in']);
	$check_out = new DateTime($_REQUEST['check_out']);
	
	$checkin = $_REQUEST['check_in'];
	$checkout = $_REQUEST['check_out'];
	
	
	$date1 = strtotime($checkin);
	$date2 = strtotime($checkout);
	$days = ceil(abs($date2 - $date1) / 86400);
	
	$search_query = "select * from room_details where room_number = '".$room_num."'";
	$run_query = mysqli_query($conn, $search_query);
	if(!$run_query)
	{
		echo mysqli_error($conn);
		die();
	}
	$room_details =  mysqli_fetch_array($run_query);
	
	
	if(isset($_POST['submit']))
	{
		//insert into database code begin
		$name = $_POST['visitor_name'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$room_number = $_POST['room_number'];
		$room_type = $room_details['name'];
		$rate = $_POST['rate'];
		$total_rate = $_POST['total_rate'];
		$payment = $_POST['payment'];
		//visitor details insert
		$insert_visitor = "insert into visitor_details (name, address, contact, email ) 
		values ('".$name."', '".$address."', '".$contact."', '".$email."')";
		$run_insert_visitor = mysqli_query($conn, $insert_visitor);
		if(!$run_query)
		{
			echo mysqli_error($conn);
			die();
		}
		$visitor_id = mysqli_insert_id($conn);
		
		//end of visitor details
		//booking details add
		$insert_booking = "insert into booking_details (c_id, room_number, room_type, rate, total_price, check_in, check_out, payment, status) 
		values('".$visitor_id."', '".$room_num."', '".$room_details['name']."', '".$rate."', '".$total_rate."', '".$checkin."', '".$checkout."', '".$payment."', 'Booked') ";
		$run_insert_booking = mysqli_query($conn, $insert_booking);
		if(!$run_insert_booking)
		{
			echo mysqli_error($conn);
			die();
		}
		
	//end of booking details
	
	//end of insert code
	//header("location:dashboard.php");
	echo "<script>window.location.href='dashboard.php';</script>";
	}
	
	
	?>
	<html>
	<head>
	<title> Kahini Hotel | Best Hotel in Digha</title>
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
	
	function validation()
	{
	var check_in = "<?php echo $_REQUEST['check_in']; ?>";
	var check_out = "<?php echo $_REQUEST['check_out']; ?>";
	
	var date1 = new Date(check_in);
	var date2 = new Date(check_out);
	
	var timeDiff = Math.abs(date2.getTime() - date1.getTime());
	var diff_day = Math.ceil(timeDiff / (1000 * 3600 * 24)+1);
	var diff_day1 = Math.ceil(timeDiff / (1000 * 3600 * 24));
	
	var total_days;
	total_days = document.addvisitor.total_days.value;
	var rate;
	rate = document.addvisitor.rate.value;
	
	var payment;
	payment = document.addvisitor.payment.value;
	
	if(total_days!="")
	{
	if(total_days<=diff_day &&  total_days>=diff_day1 && total_days>0)
	{
	total_rate = (total_days * rate);
	document.addvisitor.total_rate.value = total_rate;
	}
	else
	{
	alert("In appropriate Day(s)!");
	document.addvisitor.total_days.value="";
	return false;
	}
	}
	if(total_rate<payment)
	{
	alert("Amount mismatch!");
	document.addvisitor.payment.value = "";
	return false;
	}
	return true;
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
	<label> <b> <font color="blue"> You are booking room no-<?php echo $room_num; ?>, from <?php echo $check_in->format('d-M-Y');; ?> to <?php echo $check_out->format('d-M-Y');; ?></font></b></lable> 
	<br/><br/>
	<form method="post" name="addvisitor">
	Name<br />
	<input type="text" name="visitor_name" class="ed" required>
	<br />
	Address <br />
	<textarea name="address" class="ed" required></textarea>
	<br />
	Contact No <br />
	<input type="text" name="contact" class="ed" required>
	<br />
	Email <br />
	<input type="email" name="email" class="ed"> <br /> 
	
	Room rate/ per day <br />
	<input type="text" name="rate" value="<?php echo $room_details['price']; ?>" class="ed" readonly = "readonly"> <br />
	
	Total Day(s) <br/>
	<input type="number" name="total_days" class="ed" onchange="return validation();" required> <br />
	
	Total Rate <br />
	<input type="text" name="total_rate" value="" class="ed"> <br />
	<!-- Room Image: <br /><input type="file" name="image" class="ed"><br />-->
	Payment <br>
	<input type="text" name= "payment" value = "" class = "ed" onchange = "return validation();" required> <br>
	<input type="submit" name="submit" value="Book" id="button1" />
	
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