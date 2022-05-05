<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
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


table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px; 
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  
  border-bottom: solid 1px rgba(255,255,255,0.1);
}



</style>
</head>
<body>

<?php include_once 'menu.php';?>
<center>
<div class="main">
	<center>
		<h1>E-MEDS</h1>
		<h2><font color="#006699">Company</font></h2><br><br>
	</center>
	<div class="tbl-header">
 <table  width="100%" border="1" bordercolor="#000"cellpadding="15px" style= "font-size:12px;">
	  <center>	
	<p style="padding-top: 10px;border="5" cellpadding="2" cellspacing="3"></p>
  
    <tr>
		<th class="ud">Company id</th>
        <th class="ud">Category Id</th>
		
		<th class="ud">Company</th>
		
		
		
		
    </tr>
	
    <?php
		  include('dbconn.php');
		  
		  $query="SELECT * FROM tbl_company";
$data = mysqli_query($con,$query);
	while($res=mysqli_fetch_assoc($data))
	{
		echo"<tr>
		<td>".$res['comp_id']."</td>
		<td>".$res['cat_id']."</td>
		<td>".$res['comp_name']."</td>
	
		
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
