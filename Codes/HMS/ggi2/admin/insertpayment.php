<?php
$nm=$_POST['name'];
$id=$_POST['studentid'];
$strm=$_POST['stream'];
$sem=$_POST['semester'];
$tpy=$_POST['totalpay'];
$pay=$_POST['pay'];
$due=$tpy-$pay;
$rmrks=$_POST['remarks'];
$pdate=$_POST['paymentdate'];
$con=mysqli_connect("localhost","root","");
if(!$con){
die('could not connect'.mysqli_error());
}
mysqli_select_db($con,"ggi");
$sql=("INSERT INTO fees(name,studentid,stream,semester,totalpay,pay,due,remarks,date) VALUES('$nm','$id','$strm','$sem','$tpy','$pay','$due','$rmrks','$pdate')");
if(!mysqli_query($con,$sql)){
die('Error : '.mysqli_error($con));
}
echo '<script language="javascript">';
echo 'alert("Payment Successfull");';
echo 'window.location.href="payment.php"';
echo '</script>';
mysqli_close($con);
?>