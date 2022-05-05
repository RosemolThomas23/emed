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
  height:300px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
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
		<li><a href="index.php">LOGIN</a></li>
			<li><a href="cngpsw.php">REGISTER</a></li>	
		<?php 
		include 'dbconn.php';
		$sqlo="select * from tbl_cat ";
		$resulto=mysqli_query($con,$sqlo);
		while($reso=mysqli_fetch_array($resulto))
		{
		?>
		    <li style="float:left;"><a href="login.php" ><?Php echo $reso['cat_name']; ?></a></li>
				<?php
		}
		?>
			
		</ul>
	
	</div>
	<br>
	<div class="aimg">
		<img src="images/img2.jpg" height="500px" width="100%">	

	</div>
	</div>
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
	
	<div class ="gallery">
        	<img src="image/<?php echo $res2['img'];?>" width="600px" height="600px">
            <div class="desc"><?php echo $res2['prod_name'];?></div>
				
			 
	
	<?php
	}
	}
	}
	?> 
</div>
</div>

</body>
</html>