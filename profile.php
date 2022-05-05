<?php 
include('dbconn.php');
session_start();
$cname=$_SESSION['name'];
$sql="select * FROM `tbl_login` where `email` = '$cname';";
$data= mysqli_query($con,$sql);
if($res=mysqli_fetch_assoc($data))
{
$ker=$res['LOGIN_ID']	;
$name=$res['uname'];
$phone=$res['ph_no'];
//echo $ker;


if(isset($_POST['submit']))
{

$gndr=$_POST['gdr'];
//echo $gndr;
$adr=$_POST['adrs'];
//echo $adr;
$c=$_POST['city'];
//echo $c;
$s=$_POST['state'];
//echo $s;
$p=$_POST['pin'];
//echo $s;
$aadh=$_POST['adhr'];
//echo $aadh;
  $sql2="INSERT INTO `tbl_profile`( `LOGIN_ID`, `gender`, `adrs`, `city`, `state`, `pin`, `aadhar`) VALUES ('$ker','$gndr','$adr','$c','$s','$p','$aadh')";
if (mysqli_query($con,$sql2))
{
	echo "Registered";
	
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

}
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 35px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 15px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #ff6666;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #ed766d;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
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
		<li><a href="contact.php">CONTACT</a></li>
		<li><a href="mycart.php">MY CART</a></li>
		<li><a href="home.php">HOME</a></li>
		
			
		</ul>
	
	</div>
	
	<br>
	<div class="aimg">
		

	</div>
	</div>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profile</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="#" method="post">
      
		<br>
		
        <div class="row">
          <div class="col-50">
            <h3></h3>
			<label for="name">Name</label>
			<input type="text" id="nm" name="nm" value="<?php echo $name; ?>" disabled>	
			<label for="ph">Phone Number</label>
			<input type="text" id="ph" name="ph" value="<?php echo $phone; ?>" disabled>
            <label for="gdr">Gender</label>
			  <input type="radio" name="gdr" value="M">MALE</input>
  			  <input type="radio" name="gdr" value="F">FEMALE</input>
			  <input type="radio" name="gdr" value="O">OTHER</input><br><br><br>
			<label for="adr">Address</label>
            <input type="text" id="adr" name="adrs" placeholder="">	
			
            
			
            
			
            

            
          </div>

          <div class="col-50">
            
            <br>
			
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="">
            <label for="state">State</label>
            <input type="text" id="state" name="state" placeholder="">
            <label for="expmonth">Pincode</label>
            <input type="text" id="pin" name="pin" placeholder="">
			
			<label for="aadhar">Aadhar No.</label>
            <input type="text" id="adhr" name="adhr" placeholder=""> 
            
              <div class="col-50">
			  
                
              </div>
              
           
          </div>
          <br>
			  <input type="submit" name="submit" value="UPDATE" class="btn">
        </div>
        
        
      </form>
    </div>
  </div>
  
</div>
<div class="table">
			<table  width="100%" cellpadding="25px" style= "font-size:20px;">
			<center>	
				<p style="padding-top: 10px;border="5" cellpadding="2" cellspacing="3"></p> 
				<tr>
					<th class="ud">Name</th>
					<th class="ud">Phone</th>	
					<th class="ud">Gender</th>
					<th class="ud">Address</th>
					<th class="ud">City</th>
					<th class="ud">State</th>
					<th class="ud">Pincode</th>
					<th class="ud">Aadhar No.</th>
				</tr>
		<?php
		  include('dbconn.php');		  
		  $query2="SELECT * FROM tbl_profile WHERE `LOGIN_ID`='$ker'";
		  $data2 = mysqli_query($con,$query2);
		  while($res=mysqli_fetch_assoc($data2))
		  {
				?>
		<tr>
		
		<td><?php echo $name; ?></td>
		<td><?php echo $phone; ?></td>
		<td><?php echo $res['gender']; ?></td>
		<td><?php echo $res['adrs']; ?></td>
		<td><?php echo $res['city']; ?></td>
		<td><?php echo $res['state']; ?></td>
		<td><?php echo $res['pin']; ?></td>
		<td><?php echo $res['aadhar']; ?></td>
		
		
		
		
		
		</tr>
		<?php 
	}
?>
				
		</div>

</body>
</html>
