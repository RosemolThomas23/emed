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

<?php include_once 'menu.php';?>
<center>
<div class="main">
	<center>
	<div class="header"
		<h1>E-MEDS</h1>
	</div>
		<h2><font color="#006699">Users</font></h2><br><br>
	</center>
	<div class="table">
 <table  width="100%" cellpadding="25px" style= "font-size:20px;">
	  <center>	
	<p style="padding-top: 10px;border="5" cellpadding="2" cellspacing="3"></p>
  
    <tr>
        <th class="ud">Username</th>
		<th class="ud">Email</th>
		<th class="ud">Phone</th>
		
		
    </tr>
    <?php
		  include('dbconn.php');
		  
		  $query="SELECT * FROM tbl_login";
$data = mysqli_query($con,$query);
	while($res=mysqli_fetch_assoc($data))
	{
		echo"<tr>
		<td>".$res['uname']."</td>
		<td>".$res['email']."</td>
		<td>".$res['ph_no']."</td>
		
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
