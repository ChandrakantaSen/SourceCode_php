<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:../admin.php");
}
	require_once('../connection.php');
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



</head>
<body>
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom"><br/>
				<img id="default-logo" src="../images/kahini.png" alt="Starhotel" style="height:44px;"> 
				<a href="Documentation" target="_blank"><font color="red">Site Help</font></a>
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter">Hi 
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
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<a rel="facebox" href="addrooms.php">Add Room</a>
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> Type </th>
								<th> Rate </th>
								<th> Room Number </th>
								<th> Desciption </th>
								<!--<th> Image </th>-->
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							
							$result = mysqli_query($conn,"SELECT * FROM room_details");
							while($row = mysqli_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['name'].'</td>';
									echo '<td><div align="center">'.$row['price'].'</div></td>';
									echo '<td><div align="center">'.$row['room_number'].'</div></td>';
									echo '<td><div align="center">'.$row['description'].'</div></td>';
									//echo '<td><a rel="facebox" href="editroomimage.php?id='.$row['id'].'"><img src="../images/rooms/'.$row['img'].'" width="80" height="50"></a></td>';
									echo '<td><div align="center"><a rel="facebox" href="editroomdetails.php?id='.$row['id'].'">edit</a> | <a href="deleteroom.php?id='.$row['id'].'">delete</a></div></td>';
									echo '</tr>';
								
							?> 
							<?php 
							    } 
							?>
						</tbody>
					</table>
				</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteroom.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>