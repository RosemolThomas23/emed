<?php
include('dbconn.php');
session_start();
$id=$_GET["am"];
echo "$id";
$edit=mysqli_query($con,"SELECT * FROM `tbl_cat` WHERE `cat_id`='$id'");
$row=mysqli_fetch_array($edit);
//print_r($row);
if(isset($_POST["sub"]))
{
  $name=$_POST["cat"];
  //echo $name;
   mysqli_query($con,"UPDATE `tbl_cat` SET `cat_name`='$name' WHERE `cat_id`='$id'" );
 
   echo 'edited successfully';
  header("location:add_cat.php");
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

input[type=submit] {
  width: 25%;
  background-color: #006699;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #c2c2d6;
}

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

<?php include_once 'menu.php';?>
<div class="main">
	<center>
		<div class="header"
		<h1>E-MEDS</h1>
		</div>
		<h2><font color="#006699">Update Category</font></h2><br><br>
	</center>
	<div class="main2">
	<form action="#" method="POST">
		<label for="category">Category</label><br>
		<input type="text" id="cat" name="cat" value="<?php echo $row["cat_name"];?>"><br>

		
	
		
    	
    <input type="submit" name="sub" value="UPDATE">
  </form>
	</div>
 </div>
   
</body>
</html> 
