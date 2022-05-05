
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
.container {
  position: relative;
  margin: auto;
  overflow: hidden;
  width: 720px;
  height: 350px;
  background: $white;
  box-shadow: 5px 5px 15px rgba($rose, .5);
  border-radius: 10px;
}
h3 {
  font-size: 1.2em;
  color: $dark;
  margin-top: 12px;
}

h4 {
  color: $tan;
  margin-top: -5px;
}

img {
  width: 290px;
  margin-top: 47px;
}
.product {
  position: absolute;
  width: 50%;
  height: 70%;
  top: 10%;
  left: 50%;
}
.desc {
  text-transform: none;
  letter-spacing: 0;
  margin-bottom: 17px;
  color: $dark;
  font-size: 15px;
  line-height: 1.6em;
  margin-right: 25px;
  text-align: justify;
}
button {
  background: darken($light, 10%);
  padding: 10px;
  display: inline-block;
  outline: 0;
  border: 0;
  margin: -1px;
  border-radius: 2px;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: $white;
  cursor: pointer;
  &:hover {
    background: rose;
    transition: all .4s ease-in-out;
  }
}

.add {
  width: 87%;
  background-color:#ffb3b3;
}
.buy {
  width: 87%;
  background-color:#ff6666;
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
		<li><a href="cart.php">MY CART</a></li>
		<li><a href="home.php">HOME</a></li>
			
		</ul>
	
	</div>
	
	<br>
	<div class="aimg">
		

	</div>
	</div>
	

	<div class="container">
	<?php
	$id=$_GET["pro"];
	$query="SELECT * FROM `tbl_product` WHERE `prod_id`='$id'";
	$data=mysqli_query($con,$query);
	while($res=mysqli_fetch_assoc($data))
	{
	?>
  <div class="images">
    <img src="image/<?php echo $res['img'];?> "/>
	
  </div>
  
  
  <form action="manage_cart.php" method="POST">
  <div class="product">
    
    <h3><?php echo $res['prod_name'];?></h3>
    <h4><?php echo $res['price'];?></h4>
    <p class="desc"><?php echo $res['details'];?></p>
	
	
  </div>
  <?php
	}
  ?>
</div>
	
	
	


</body>
</html>