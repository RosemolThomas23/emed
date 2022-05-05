<?php
include 'dbconn.php';
session_start();
$cname=$_SESSION['name'];
$id=$_GET['as'];
echo "$id";
$sq="select * from tbl_login where email='$cname'";
$data=(mysqli_query($con,$sq));
if($row=mysqli_fetch_assoc($data))
{
$regid=$row['LOGIN_ID'];
$result=mysqli_query($con,"DELETE FROM `tbl_cart` WHERE `prod_id`='$id' AND `LOGIN_ID`='$regid'");
$row=mysqli_fetch_array($result);
header("location:cart.php");
}
?>