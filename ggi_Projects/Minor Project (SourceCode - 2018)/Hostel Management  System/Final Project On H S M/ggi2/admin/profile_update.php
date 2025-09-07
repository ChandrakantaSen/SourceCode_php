<?php
session_start();
//$id=$_SESSION['id'];
$connect=mysqli_connect("localhost","root","","ggi");
$id=$_SESSION['id'];

$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$country=$_POST['country'];
$contact=$_POST['contactno'];
$acontact=$_POST['alternatecontactno'];
$grad=$_POST['grad'];
$gcontact=$_POST['gcontact'];

$q="update userregistration set email='$email', address='$address',city='$city',state='$state',pin='$pin',country='$country',contactNo='$contact',acontact='$acontact',graduation='$grad',gcontact='$gcontact' where id='$id'";
$qry=mysqli_query($connect,$q) or die(mysqli_error($connect));

?>

<script>
    alert("Successfully Update !");
    window.location="update_profile.php";
    </script>