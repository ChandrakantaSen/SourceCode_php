<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
	<fieldset>
	<legend>Calculator Form:</legend>
	<form name= "form1" action="calculator.php" method="post" >
		<table border="0">
			<tr>
				<td><b>Enter the first number :</b></td>
				<td><input type="text" name="fno" value="" placeholder="--Enter the number1--" required="true" maxlength="30"/></td>
			</tr>
			<tr>
				<td><b>Enter the second number :</b></td>
				<td><input type="text" name="sno" value="" placeholder="--Enter the number2--" required="true" maxlength="15"/></td>
			</tr>
			<tr>
				<td> <b>Enter the Operations :</b></td>
				<td>
						<select name="ope" >
							<option value="--Select the Operation--">-Select the Operation--</option>
							  <option value="add">+</option>
							  <option value="subtract">-</option>
							  <option value="multiply">*</option>
							  <option value="divide">/</option>
						</select>
				</td>
			</tr>
			<!--<tr>
				<td><b>Output:</b></td>
				<td><input type="text" name="output" rows="10" cols="30" value="<?php echo $output; ?>"/></td>
			</tr> --> 
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit">
						<input type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
	</form>
	</fieldset>
	<table>
	<td>
<?php
$b = "<br/>";
$fno = $_POST['fno'];
$sno = $_POST['sno'];
$ope = $_POST['ope'];

 
print "<strong>Number 1 : </strong>".$fno.$b; 
print "<strong>Number 2 : </strong>".$sno.$b;
print "<strong>Operation :</sstrong>".$ope.$b;


/*****************Switch Statement********************************/
switch($ope){
	case ($ope=="add"): 
		$output=$fno+$sno;
		print "Output is: ".$output; break;
	case ($ope=="subtract"): 
		$output=$fno-$sno;
		print "Output is: ".$output; break;	
	case ($ope=="multiply"): 
		$output=$fno*$sno;
		print "Output is: ".$output; break;
	case ($ope=="divide"): 
		$output=$fno/$sno;
		print "Output is: ".$output; break;
	default:
		echo "welcome to the calculator...!";
}
?>
	</td>
	</table>
</body>
</html>