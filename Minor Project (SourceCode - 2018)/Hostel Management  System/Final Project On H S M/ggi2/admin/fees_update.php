 <?php
session_start();
//$id=$_SESSION['id'];
$connect=mysqli_connect("localhost","root","","ggi");
$id=$_GET['id'];

$tpay=$_POST['totalpay'];
$repay=$_POST['rpay'];
$pay=$_POST['pay']+$repay;
$due=$tpay-$pay;
//echo $due;
$remark=$_POST['remarks'];
$udate=$_POST['udate'];
//$q="update fees set repayment='$repay' where id='$id'";
$q="update fees set pay='$pay', due='$due',remarks='$remark',fees_update='$udate' where id='$id'";
$qry=mysqli_query($connect,$q) or die(mysqli_error($connect));

?>

<script>
    alert("Successfully Update !");
    window.location="fees.php";
    </script>

 
