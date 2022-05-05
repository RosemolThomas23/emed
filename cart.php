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
}
else{
	echo mysqli_errno($con);
}
?>

<html>
<head>
<style>
body{
  padding: 1em;
  background-image: url(https://subtlepatterns.com/patterns/retina_wood.png);
  font-family: arial;
}
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

img {
  width: 100%;
  max-width: 100%;
}

*{
    box-sizing:border-box;
    -moz-box-sizing:border-box; /* Firefox */
    -webkit-box-sizing:border-box; /*Chrome and Safari*/
 /*  outline: 1px grey solid; */
}

a{
  color: #739931;
}

.page{
  max-width: 78%;
  margin: 0 auto;
}

.page * {
  padding: 0;
  margin: 0;
}

/* Mobile */

#store_cart {
  float: left;
  width: 100%;
}

/* cart header */

.cart_head {
  float: left;
  width: 100%;
  display: table;
  background: #1F1F1F;
  color: white;
background: rgb(69,72,77);
background: -moz-linear-gradient(top,  rgba(69,72,77,1) 0%, rgba(34,34,34,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(69,72,77,1)), color-stop(100%,rgba(34,34,34,1)));
background: -webkit-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(34,34,34,1) 100%);
background: -o-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(34,34,34,1) 100%);
background: -ms-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(34,34,34,1) 100%);
background: linear-gradient(to bottom,  rgba(69,72,77,1) 0%,rgba(34,34,34,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#222222',GradientType=0 );


}

.cart_head li {
  vertical-align: middle;
  padding: 12px;
  font-size: 18px;
  float: left;
}

/* cart header cells */

.cart_head_title {
  display: table-cell;
  width: 100%;
}
.cart_head_product {
  display: none;
}
.cart_head_options {
  display: none;
}
.cart_head_price {
  display: none;
}

/* cart header pseudo-class */

.cart_head li:focus {}
.cart_head li:last-child {}

/* cart item */

.cart_item {
  float: left;
  width: 100%;
  display: table;
  background: #fff;
  border: 1px solid #555;
  border-top: none;

}

.cart_item li {
  vertical-align: middle;
  padding: 9px;
  font-size: 0.8em;
  float: left;
}

.cart_item li p {
  font-size: 1.3em;
}

.cart_item li span {
  font-size: 0.9em;
}

.cart_item li h2 {
  font-size: 1.1em;
}

/* cart item cells */

.cart_img_col {
  display: inline-block;
  width: 30%;
  text-align: center;
  background-image: url(https://i.imgur.com/3P8WF5D.jpg);
  background-size: 90%;
  background-position: center center;
  background-repeat: no-repeat;
  height: 100px;
}

.cart_img_col img {
  display: none;
}

.cart_product_col {
  display: inline-block;
  width: 70%;
  padding-bottom: 0 !important;
}

.cart_options_col {
  display: inline-block;
  width: 30%;
}
.cart_options_col input {
  width: 48px;
}
.cart_price_col {
  text-align: center;
  display: inline-block;
  width: 20%;
}
.cart_del_col {
  display: inline-block;
  width: 20%;
  text-align: center;
}
.cart_del_col img {
  max-width: 25px;
  cursor: pointer;
}
.cart_del_col img:hover {
  opacity: 0.8;
}

/* cart item pseudo-class */

.cart_item:first-child {}
.cart_item:last-child {}
.cart_item li:first-child {}
.cart_item li:last-child {}


/* Tablet */
@media only screen and (min-width: 481px) {

/* cart item */

.cart_item {
  height: 100px;
}

.cart_head li {
  float: none;
  font-size: 1em;
}

.cart_item li {
  float: none;
}

.cart_item li p {
  font-size: 1.2em;
}

.cart_item li span {
  font-size: 1em;
}

.cart_item li h2 {
  font-size: 1em;
}

/* cart header cells */

.cart_head_title {
  display: none;
}
.cart_head_product {
  display: table-cell;
  width: 45%;
}
.cart_head_options {
  display: table-cell;
  width: 18.5%;
}
.cart_head_price {
  display: table-cell;
  width: 21.625%;
}

/* cart item cells */

.cart_img_col {
  width: 15%;
  display: table-cell;
  background-image: none;
}

.cart_img_col img {
  max-width: 60px;
  display: inline-block;
  height: auto;
}

.cart_product_col {
  display: table-cell;
  width: 30%;
  padding-bottom: 12px !important;
}

.cart_options_col {
  display: table-cell;
  width: 18.5%;
}

.cart_price_col {
  display: table-cell;
  width: 11.625%;
}

.cart_del_col {
  display: table-cell;
  width: 9%;
}

.cart_item li:nth-child(even) {
    background: rgba(0,0,0, 0.1);

}

.cart_head li:nth-child(odd) {
  background: rgba(255, 255, 255, 0.1);
}

}

/* Desktop */

@media only screen and (min-width: 769px) {

/* cart item */

.cart_head li:nth-child(even) {
  background: rgba(255, 255, 255, 0.1);
}

.cart_head li:nth-child(odd) {
  background: none;
}

.cart_item {
  height: 10px;
}

.cart_head li {
  font-size: 1.1em;
  
}

.cart_item li p {
  font-size: 1.4em;
  font-weight: 700;
}

.cart_item li span {
  font-size: 1em;
}

.cart_item li h2 {
  font-size: 1.4em;
}

/* cart header cells */

.cart_head_title {
  display: table-cell;
  width: 15%;
}
.cart_head_product {
  width: 45%;
}
.cart_head_options {
  width: 110px;
}
.cart_head_price {
  width: 110px;
}

/* cart item cells */

.cart_img_col {
}

.cart_img_col img {
  max-width: 75px;
}

.cart_product_col {
  width: 45%;
}

.cart_price_col {
  width: 110px;
}

.cart_options_col {
  width: 110px;
}

.cart_del_col {
  width: 110px;
}
button {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 150px;
  cursor: pointer;
  float:right;
}
}
.cart-total {
    text-align: end;
    margin-top: 10px;
    margin-right: 10px;
}

.cart-total-title {
    font-weight: bold;
    font-size: 1.5em;
    color: black;
    margin-right: 20px;
}

.cart-total-price {
    color: #333;
    font-size: 1.1em;
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
		<li><a href="cart.php">MY CART</a></li>
		<li><a href="home.php">HOME</a></li>
			
		</ul>
	
	</div>
	
	<br>
	<div class="aimg">
		

	</div>

	<br><br><br>
<div class="page">
	<div id="store_cart">
		<ul class="cart_head">
			<li class="cart_head_title">
				My Cart
			</li>
			<li class="cart_head_product">
				Product
			</li>
			<li class="cart_head_options">
				Edit
			</li>
			<li class="cart_head_price">
				Unit Price
			</li>
			<li class="cart_head_options">
				Total
			</li>
			<li class="cart_head_options">
				
			</li>
			
		</ul>
<?php

$query="SELECT * FROM tbl_cart WHERE LOGIN_ID='$ker'";
$data=mysqli_query($con,$query);
while($ros=mysqli_fetch_assoc($data))
{
	$prod=$ros['prod_id'];
	$query3="SELECT * FROM tbl_product WHERE PROD_ID='$prod'";
	$data3=mysqli_query($con,$query3);
	while($res=mysqli_fetch_assoc($data3))
	{
		?>
		
	
		<ul class="cart_item">

			<li class="cart_img_col">
				<img src="image/<?php echo $res['img'];?>">
				<br>
				<a href="removecart.php?as=<?php echo $res['prod_id'];?>">Remove</a>
			</li>

			<li class="cart_product_col">
				<p><?php echo $res['prod_name'];?></p>
				
			</li>
			 
      		<li class="cart_options_col">
				<span>Quantity: </span>
				<select class="quantity" name="quantity" id="selectBox<?php echo $res['prod_id'] ?>" onchange="change(<?php echo $res['prod_id'] ?>)">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>	
				</select>
				


			</li>
			<?php
			 $x=$res['price'];
			 //echo $x;
			 
			?>
			<li class="cart_price_col">
				<h2 id="up<?php echo $res['prod_id'] ?>"><?php echo $res['price'];?></h2>
			</li>
			<li class="cart_price_col">
				<h2 id="display<?php echo $res['prod_id'] ?>"><?php echo $x*5;?></h2>
			</li>
			
			<li class="cart_del_col">
        <a href="removecart.php?as=<?php echo $res['prod_id'];?>">
		<img src="https://i.imgur.com/bI4oD5C.png"></a>
			</li>
		</ul>
		
<?php
	}
}
$total_price=0;


?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select.quantity").change(function(){
        var selectedQuantity = $(this).children("option:selected").val();
        alert("Quantity - " + selectedQuantity);
    });
});
function change(qty){
	let quantity=qty;
	let valw = $('#selectBox'+qty).val();
	alert(valw);
	$('#display').html(valw);
}
</script>

   <div class="cart-total">
   
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price"><?php echo $total_price;?></span>
            </div>

	</div>
	
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<a href="checkout.php"><button>BUY NOW</button></a>
	</div>
</body>
</html>