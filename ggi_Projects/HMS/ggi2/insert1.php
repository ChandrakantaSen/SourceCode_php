<?php
$nm=$_POST['name'];
$strm=$_POST['stream'];
$sem=$_POST['sem'];
$cont=$_POST['contact'];
$con=mysqli_connect("localhost","root","");
if(!$con){
die('could not connect'.mysqli_error());
}
mysqli_select_db($con,"ggi");
$sql=("INSERT INTO apply(name,stream,sem,contact) VALUES('$nm','$strm','$sem','$cont')");
if(!mysqli_query($con,$sql)){
die('Error : '.mysqli_error($con));
}
echo '<script language="javascript">';
echo 'alert("We Will Contact you Soon");';
echo 'window.location.href="index.php"';
echo '</script>';
mysqli_close($con);
?>