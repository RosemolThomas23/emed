<?php
include 'dbconn.php';
if(isset($_POST['submit']))
{
$ctname=$_POST['cat'];
$cname=$_POST['comp'];
$pname=$_POST['prod'];

$det=$_POST['det'];

if($_FILES["img"]["tmp_name"]!="")
		$i=$_FILES["img"]["name"];//2d array type inst of name return type size
	//print_r($_FILES);exit;
	else
		$i=$row['img'];
	move_uploaded_file($_FILES["img"]["tmp_name"],"image/".$_FILES["img"]["name"]);
$query="SELECT * FROM `tbl_company` WHERE comp_name='$cname'";
$data=mysqli_query($con,$query);
if($res=mysqli_fetch_assoc($data))
{
	$ent=$res['cat_id'];
	$ker=$res['comp_id'];
	
//echo $cname;
	$sql="INSERT INTO `tbl_pdt`( `cat_id`,`comp_id`, `pdt_name`, `pdt_details`,  `img`, `status`) VALUES ('$ent','$ker','$pname','$det','$i',0)";
if (mysqli_query($con,$sql))
{
	//echo '<script type="text/javascript"> alert("Success")</script>';
	
}
else
{
	echo mysqli_errno($con);
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

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
</head>
<body>
<div class="container">

 <?php include_once 'menu.php';?> 
<div class="main">
	<center>
		<div class="header"
		<h1>E-MEDS</h1>
	</div>
		<h2><font color="#006699">Add Product</font></h2><br><br>
	</center>
	<div class="main2">
	<form action="#" method="POST" enctype="multipart/form-data">
		
		<label>Category</label><br>
		<select id="id_select" name="cat" onChange="name_click()">
		<optgroup>
		<?php
		include 'dbconn.php';
		$query="SELECT * FROM `tbl_cat`";
		$data=mysqli_query($con,$query);
			while($res=mysqli_fetch_assoc($data))
			{
				?>
				<option>
				<?php echo $res['cat_name'];?></option>
		<?php	}
		?>
		</optgroup>
		</select>
		<br><br>

		<div id="comp"></div>
		<label>Company</label><br>
		<select required name="comp" id="comp">
		<optgroup>
		<?php
		include 'dbconn.php';
		$cid=$_GET["am"];
		$query="SELECT * FROM `tbl_company` where cat_id='$cid'";
		$data=mysqli_query($con,$query);
			while($res=mysqli_fetch_assoc($data))
			{
				?>
				<option><?php echo $res['comp_name'];?></option>
		<?php	}
		?>
		</optgroup>
		</select>
		<br><br>
		
		<label>Product Name</label>	
		<input type="text" id="prod" name="prod" placeholder="ProductName">
		
		
		<label>Details</label>	
		<input type="text" id="det" name="det" placeholder="Details">
		
		
		
			
		<label>Image</label><br>
		<input type="file" id="image" name="img" size="200KB" accept="image/gif,image/jpg,image/JPG, image/jpeg, image/x-ms-bmp, image/x-png"  >
		<br><br>	
    	
    <button type="submit" id="submit" name="submit">ADD</button>

  </form>
  

 </div>
 <!--<table  width="100%" cellpadding="15px" style= "font-size:12px;">
	  <center>	
	<p style="padding-top: 10px;border="5" cellpadding="2" cellspacing="3"></p>
  
    <tr>
        <th class="ud">Category</th>
		<th class="ud">Company </th>
		<th class="ud">Product </th>
		
		<th class="ud">Details</th>
		
		<th class="ud">Image</th>
		<th class="ud" colspan="2"><center>Action</center></th>
		<th class="ud">Status</th>
		
		
		
    </tr>
    <?php
		  include('dbconn.php');
		  
		  $query="SELECT tbl_cat.cat_name,tbl_company.comp_name,tbl_pdt.pdt_name,tbl_pdt.prod_id,tbl_product.dose,tbl_product.details,
					tbl_product.price,tbl_product.img,tbl_product.status
		  FROM `tbl_company` JOIN `tbl_product` ON(tbl_company.comp_id=tbl_product.comp_id);";
		  
		  
$data = mysqli_query($con,$query);
	while($res=mysqli_fetch_assoc($data))
	{
		?>
		<tr>
		
		<td><?php echo$res['comp_name'];?></td>
		<td><?php echo$res['prod_name'];?></td>
		<td><?php echo$res['dose'];?></td>
		<td><?php echo$res['details'];?></td>
		<td><?php echo$res['price'];?></td>
		
		<td><img src="image/<?php echo$res['img'];?>" width="50px" height="50px" ></img></td>
		
		<td><center><a href="edit_prd.php?am=<?php echo $res["prod_id"];?>">
		<input type="button" style="background-color: #5c8a8a; color:white; "value="EDIT" ></center></a></td>
		<td><center><a href="del_prod.php?am=<?php echo $res["prod_id"];?>">
		<input type="button" style="background-color:#ff3333; color:white;" value="DELETE"></center></a></td>
		
		<td><?php echo$res['status'];?></td>
		
		</tr>
		<?php 
	}
?>-->
	  </form>
	  </div>
	  </div>
</body>
</table>
</div>  
</body>
</html> 

<script>
$(document).ready(function() {
    $('#id_select').on('change', do_something);
});

function do_something() {
    var selected = $('#id_select').val();
    $.ajax({
        url:        'http:\\localhost\add_product.php',
        type:       'POST',
        dataType:   'json',
        data:       { value: selected },
        success:    function(data) {
            $('#comp').html(data);
        }
    });
}
</script>