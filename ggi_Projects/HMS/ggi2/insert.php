<?php
$nm=$_POST['name'];
$eml=$_POST['email'];
$cmnt=$_POST['comments'];
$con=mysqli_connect("localhost","root","");
if(!$con){
die('could not connect'.mysqli_error());
}
mysqli_select_db($con,"ggi");
$sql=("INSERT INTO comment(name,email,comment) VALUES('$nm','$eml','$cmnt')");
if(!mysqli_query($con,$sql)){
die('Error : '.mysqli_error($con));
}
echo '<script language="javascript">';
echo 'alert("thank you");';
echo 'window.location.href="index.php"';
echo '</script>';
mysqli_close($con);
?>