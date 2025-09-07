<?php
session_start();
require "include/connection.php";
date_default_timezone_set('Asia/Calcutta'); //set default timezone for kolkata
$date = date('Y-m-d h:i:s a', time());
$id = $_SESSION['admin_id'];
$update_login = "update tbl_admin set last_login = '".$date."' where id = '".$id."'";
$run_update = mysqli_query($connection, $update_login);
unset($_SESSION['admin_id']);
header("location:index.php");
?>