<?php
$connect=mysqli_connect("localhost","root","","collageregistration");

$name=$_POST['textnames'];
$fname=$_POST['fathername'];
$mname=$_POST['mothername'];
$aname=$_POST['address'];
$gname=$_POST['gender'];
$sname=$_POST['State'];
$dname=$_POST['District'];
$cname=$_POST['City'];
$pname=$_POST['Pincode'];
$lname=$_POST['Course'];
$ename=$_POST['Email_Id'];
$bname=$_POST['DOB'];
$kname=$_POST['contact'];

$q="insert into userinfo values('','$name','$fname','$mname','$aname','$gname','$sname','$dname','$cname','$pname','$lname','$ename','$bname','$kname')";
$qry=mysqli_query($connect,$q) or die(mysqli_error($connect));

?>

<script>
    
    alert("Successfully Register");
    window.location="index.html";
    </script>