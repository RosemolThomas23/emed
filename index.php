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
  background-color: #333;
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
</style>
</head>

<body>
<div class="main">
	<div class="header">
		<h1>E-MEDS</h1>
	</div>

	<div class="navbar">
		<ul>
			<li><a href="login.php">LOGIN</a></li>
			<li><a href="reg.php">REGISTER</a></li>	
		</ul>
	</div>
	<br>
	<div class="aimg">
		<img src="images/img2.jpg" height="400px" width="100%">	
	</div>
	</div>
	
	<?php
	include('dbconn.php');
	$sql="select * from `tbl_product`";
	$data= mysqli_query($con,$sql);
	while($res=mysqli_fetch_assoc($data))
	{
	?>
	&nbsp; &nbsp;
	<div class="navbar"></div>
	<div class ="gallery">
        	<img src="image/<?php echo $res['img'];?>" width="600px" height="600px">
            <div class="desc"><?php echo $res['prod_name'];?></div> 
			</div> 
	
	<?php
	}
	?> 	

</body>
</html>