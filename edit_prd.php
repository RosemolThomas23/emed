
<?php
include('dbconn.php');
session_start();
$id=$_GET["am"];
echo "$id";
$edit=mysqli_query($con,"SELECT * FROM `tbl_product` WHERE `prod_id`='$id'");
$res=mysqli_fetch_assoc($edit);

if (isset($_POST["submit"]))
{
  $b=$_POST["comp"];
  $query="SELECT * FROM `tbl_company` WHERE comp_name='$b' "; 
  $data = mysqli_query($con,$query);
  if($row=mysqli_fetch_assoc($data)){

    $ker=$row["comp_id"];
    //echo $name;
    $a=$_POST["prod"];
    //echo $address;
    
    //echo $phone;
	 $d=$_POST["det"];
	 $s=$_POST["price"];
	if($_FILES["img"]["tmp_name"]!="")
		$i=$_FILES["img"]["name"];//2d array type inst of name return type size
	//print_r($_FILES);exit;
	else
		$i=$row['img'];
	move_uploaded_file($_FILES["img"]["tmp_name"],"image/".$_FILES["img"]["name"]);
  mysqli_query($con,"UPDATE `tbl_product` SET `prod_id`='$ker',`prod_name`='$a',`details`='$d',`price`='$s', `img`='$i',`status`=0 WHERE `prod_id`='$id'");
 header("location:add_prod.php");
 }
$edit=mysqli_query($con, "SELECT * FROM `tbl_product` WHERE `prod_id`='$id'");
$row=mysqli_fetch_array($edit);
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

</style>
</head>
<body>
<div class="container">

<?php include_once 'menu.php';?>
<div class="main">
	<center>
		<div class="header"
		<h1>E-MEDS</h1>
	</div>
		<h2><font color="#006699">Update Product</font></h2><br><br>
	</center>
	<div class="main2">
	<form action="#" method="POST" enctype="multipart/form-data">
		<label>Company</label><br>
		<select required name="comp" id="comp">
		<optgroup>
		<?php
		include 'dbconn.php';
		$query="SELECT * FROM `tbl_company`";
		$data=mysqli_query($con,$query);
			while($rad=mysqli_fetch_assoc($data))
			{
				?>
				<option><?php echo $rad['comp_name'];?><option>
		<?php	}
		?>
		</optgroup>
		</select>
		<br><br>
		
		<label>Product Name</label>	<br>
		<input type="text" id="prod" name="prod" value="<?php echo $res["prod_name"];?>"><br>
		
		<label>Details</label><br>		
		<input type="text" id="det" name="det" value="<?php echo $res["details"];?>"><br>
		<label>Price</label><br>
		
		
		<input type="text" id="price" name="price" value="<?php echo $res["price"];?>"><br>	
		<label>Image</label><br>
		<img src="image/<?php echo $res["img"];?>" width="50px" height="50px"/>
		<input type="file" id="image" name="img" size="200KB" accept="image/gif,image/jpg,image/JPG, image/jpeg, image/x-ms-bmp, image/x-png"  >
		<br><br>	
    	
    <button type="submit" id="submit" name="submit">UPDATE</button>

  </form>
  </div>
  </body>
  </html>