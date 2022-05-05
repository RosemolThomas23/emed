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
    font-size: .95em;
    letter-spacing: 0.6px;
    display: block;
    color: #fff;
    font-weight: 400;
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


</style>
</head>
<body>

<?php include_once 'menu.php';?>
<center>
<div class="main">
	<center>
		<h1>E-MEDS</h1>
		<h2><font color="#006699">Category</font></h2><br><br>
	</center>
	<div class="table">
 <table  width="100%" border="1" bordercolor="#000"cellpadding="15px" style= "font-size:12px;">
	  <center>	
	<p style="padding-top: 10px;border="5" cellpadding="2" cellspacing="3"></p>
  
    <tr>
        <th class="ud">Category id</th>
		<th class="ud">Category</th>
		
		
		
		
    </tr>
    <?php
		  include('dbconn.php');
		  
		  $query="SELECT * FROM tbl_cat";
$data = mysqli_query($con,$query);
	while($res=mysqli_fetch_assoc($data))
	{
		echo"<tr>
		<td>".$res['cat_id']."</td>
		<td>".$res['cat_name']."</td>
		
		</tr>";
	}
?>
</div>
	  </form>
</body>
</table>
 </center>
 </div>


</body>
</html> 
