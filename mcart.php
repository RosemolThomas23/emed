<?php 
include('dbconn.php');
session_start();
$cname=$_SESSION['name'];
$sql="select * FROM `tbl_login` where `email` = '$cname';";
$data= mysqli_query($con,$sql);


if($res=mysqli_fetch_assoc($data))
{
$ker=$res['LOGIN_ID']	;
//echo $ker;
$prod=$_GET["am"];
//echo $prod;

 


$sql2="INSERT INTO `tbl_cart`( `LOGIN_ID`, `prod_id`) VALUES ('$ker','$prod');";
if(mysqli_query($con,$sql2))
{
echo "added to cart";
header("location:cart.php");
}
  else
      {
		echo mysqli_errno($con);
      }
}



?>
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script>