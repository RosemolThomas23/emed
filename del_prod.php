<?php
include 'dbconn.php';
$id=$_GET["am"];
echo "$id";
$result=mysqli_query($con,"DELETE FROM `tbl_product` WHERE `prod_id`='$id'");
$row=mysqli_fetch_array($result);
header("location:add_prod.php");
?>