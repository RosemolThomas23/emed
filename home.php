
<?php
include('dbconn.php');
session_start();
$cname=$_SESSION['name'];


?>

<!DOCTYPE html>
<html>
<head>
<title>emedindex</title>
<style>
.header {
  padding: 10px;
  text-align: center;
  background: #ff9999;
  color: white;

}
.header h1 {
  font-size: 30px;
}
.navbar {
  overflow: hidden;
  background-color: white;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  background-color:   #ff3333;
  padding:5px;
  overflow: hidden;
}
li {
  float: right; 
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 30px 10px;
  text-decoration: none;
}
li a:hover {
  background-color: #ff8080;
}
div.gallery {
  margin: 5px;
  border: 2px solid white;
  float: left;
  width: 250px;
  
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 250px;
}

div.desc {
  padding: 15px;
  text-align: center;
}
.footer {
  margin-top: 30%;
  padding:10px;
  text-align: center;
  background: #ddd;
}
button {
  background-color: #ff3333;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 250px;
}
.product-quantity{
	width: 240px;
}
</style>
</head>

<body>
<div class="main">
	<div class="header">
		<h1>E-MEDS</h1>
	</div>

	<div class="navbar">
		<ul>
		<li><a href="login.php">LOGOUT</a></li>
		<li><a href="profile.php">PROFILE</a></li>
		<li><a href="contact.php">CONTACT</a></li>
		<li><a href="mycart.php">MY CART</a></li>
		<li><a href="home.php">HOME</a></li>
		
			
		</ul>
	
	</div>
	
	<br>
	<div class="aimg">
		

	</div>
	</div>
	<?php 
	//echo $cname;
	?>
	<div class = "container">

	
	<div class="navbar">
		<?php
	include('dbconn.php');
	$sql="select * from `tbl_cat`";
	$data= mysqli_query($con,$sql);
	while($res=mysqli_fetch_assoc($data))
	{
	$cat = $res['cat_id'];
	$cname = $res['cat_name'];
	$sql1="select * from `tbl_company` where `cat_id`='$cat'";
	$data1= mysqli_query($con,$sql1);
	while($res1=mysqli_fetch_assoc($data1))
	{
	$comp = $res1['comp_id'];
	$sql2="select * from `tbl_product` where `comp_id`='$comp'";
	$data2= mysqli_query($con,$sql2);
	while($res2=mysqli_fetch_assoc($data2))
	{
	?>
	&nbsp; &nbsp;
	
	</div>
	<form action="manage_cart.php" method="POST">
	<div class ="gallery">
		<a href="singleprod.php?pro=<?php echo $res2['prod_id'];?>">
        	<img src="image/<?php echo $res2['img'];?>" width="600px" height="600px">
			</a>
            <div class="desc">
			<p class="prod" name="prod"><?php echo $res2['prod_name'];?><br></p>
			<p class="Price" name="Price">Price:<?php echo $res2['price'];?></p>
			</div>
			<button type="submit"name="Add_to_cart"  class="btn btn-info">Add to Cart</button>
			<br>
			<input type="hidden" name="prod"value="<?php echo $res2['prod_name'];?>">  
			<input type="hidden" name="Price"value="<?php echo $res2['price'];?>"> 
		</form>
		
			
			

	<?php
	
	}
	}
	}
	?> 
	
</div>
</div>

</body>
</html>