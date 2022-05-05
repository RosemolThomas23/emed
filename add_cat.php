<?php
include 'dbconn.php';
if(isset($_POST['submit']))
{
	$cname=$_POST['cat'];
	//echo $cname;
	$sql2="SELECT * FROM `tbl_cat` WHERE `cat_name`='$cname' ";
	$dup=mysqli_query($con,$sql2);
	if(mysqli_num_rows($dup)>0)
	{
		echo '<script type="text/javascript"> alert("Duplication")</script>';
	}
	else
	{
		$sql="INSERT INTO `tbl_cat`(`cat_name`) VALUES ('$cname')";
		if (mysqli_query($con,$sql))
		{
			//echo "Success";
		}
		else
		{
			//echo mysqli_errno($con);
		}
	}
}
?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #006699;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
	padding: 16px 10px;
    font-size: 20px;
    letter-spacing: 0.6px;
    display: block;
    color: #fff;
    
	text-decoration:none;
  
}
.h2{
	font-size: 30px;
    letter-spacing: 4px;
    color: #292929;
    text-shadow: 2px 2px 3px #838386;
    text-transform: capitalize;
	}

.sidenav a:hover {
  color: #d4d4aa;
}

.main {
  margin-left: 250px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

input[type=text],input[type=email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type=submit] {
  width: 25%;
  background-color: #006699;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #c2c2d6;
}

table {
  border-collapse: collapse;
  
  width: 100%;
}
th{
	text-align: left;
  padding: 8px;
  background-color:   #4d94ff;
}

 td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #e6e6e6;}
tr:nth-child(odd) {background-color: #f2f2f2;}

.header {
  overflow: hidden;
  background-color: #006699;
  margin: 5px ;
  padding: 30px 10px;
  font-family: Georgia, serif;
  color: #ffffff;
  font-weight: 900;
  font-size:30px; 
}
.logo {
	padding-right:10 px;
}

</style>
</head>
<body>

<?php include_once 'menu.php';?>
<div class="main">
	<center>
	<div class="header"
		<h1>E-MEDS</h1>
	</div>
		<h2><font color="#006699">Add Category</font></h2><br><br>
	</center>
		<form action="#" method="POST">
			<label>Category</label><br>
			<input type="text" id="cat" name="cat" placeholder="Category" required><br>		  	
			<button type="submit" id="submit" name="submit">ADD</button>
		</form>
		<div class="table">
			<table  width="100%" cellpadding="25px" style= "font-size:20px;">
			<center>	
				<p style="padding-top: 10px;border="5" cellpadding="2" cellspacing="3"></p> 
				<tr>
					<th class="ud">CATEGORY ID</th>
					<th class="ud">CATEGORY</th>		
					<th class="ud" colspan="3"><center>ACTION</center></th>
				</tr>
		<?php
		  include('dbconn.php');		  
		  $query="SELECT * FROM tbl_cat";
		  $data = mysqli_query($con,$query);
		  while($res=mysqli_fetch_assoc($data))
		  {
				?>
		<tr>
		
		<td><?php echo$res['cat_id'];?></td>
		<td><?php echo$res['cat_name'];?></td>
		<td><center><a href="edit.php?am=<?php echo $res["cat_id"];?>">
		<input type="button" style="background-color: #5c8a8a; color:white; "value="EDIT" ></a></center></td>
		<td><center><a href="delete.php?am=<?php echo $res["cat_id"];?>">
		<input type="button" style="background-color:#ff3333; color:white;" value="DELETE"></a></center></td>
			<td><center><a href="add_prod.php?am=<?php echo $res["cat_id"];?>">
		<input type="button" style="background-color:green; color:white;" value="ADD_PRODUCT"></a></center></td>
		
		
		</tr>
		<?php 
	}
?>
				
		</div>
 </div>  
</body>
</html> 
