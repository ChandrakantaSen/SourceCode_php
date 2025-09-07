<?php
	require_once('../connection.php');
?>


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
<link rel="stylesheet" href="css/default.css" type="text/css">  <!--For zebra date picker-->

<form action="room_number.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm();">
	RoomType<br />
	<select name="item" required="required">
		<option selected="selected" disabled="disabled">Select a room type</option>
		<?php
			include('connection.php');
			$result = mysqli_query($conn,"SELECT DISTINCT name FROM room_details");
			while($row = mysqli_fetch_array($result))
			{
			?>
			<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
			<?php
			}
		?>
	</select><br />
	Check in<br />
    <input name="check_in" type="text" id="datepicker-example7-start" class="ed" onkeypress="return isNumberKey(event);"  required="required"/><br />
	Check out<br />
    <input name="check_out" type="text" id="datepicker-example7-end" class="ed" onkeypress="return isNumberKey(event);" required="required"/><br />
    
	<!-- Room Image: <br /><input type="file" name="image" class="ed"><br />-->
	
	<input type="submit" name="Submit" value="Proceed" id="button1" />
	
</form>

<script type="text/javascript" src="js/jquery-1.12.0.js"></script>
<script type="text/javascript" src="js/zebra_datepicker.js"></script>
<script type="text/javascript" src="js/core.js"></script>