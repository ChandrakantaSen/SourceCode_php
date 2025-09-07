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
					<div class="tcenter">
					<!--<strong> Admin</strong>-->Hi 
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
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7" width="15%"> Name </th>
								<th width="15%"> Phone </th>
								<th width="15%"> Email </th>
								<th width="15%"> Subject </th>
								<th width="25%"> Message </th>
								<th width="15%"> Date </th>
								<th width="15%"> Delete </th>

							</tr>
						</thead>
						<tbody>
						<?php
						
						$result = mysqli_query($conn,"SELECT * FROM contact order by id desc");
						while($row = mysqli_fetch_array($result))
							{
								$t=$row['contact_date'];
								
								echo '<tr class="record">';
								echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['name'].'</td>';
								echo '<td><div align="left">'.$row['phone'].'</div></td>';
								echo '<td><div align="left">'.$row['email'].'</div></td>';
								echo '<td><div align="left">'.$row['subject'].'</div></td>';
								echo '<td><div align="left">'.$row['comments'].'</div></td>';
								echo '<td><div align="left">'.date("d-m-Y",$t).'</div></td>';
								echo '<td><div align="center"><a href="deletecomment.php?id='.$row['id'].'">delete</a></div></td>';
								echo '</tr>';
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
	
</body>
</html>