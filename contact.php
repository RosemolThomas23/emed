<?php 
include('dbconn.php');
session_start();
$cname=$_SESSION['name'];
$sql="select * FROM `tbl_login` where `email` = '$cname';";
$data= mysqli_query($con,$sql);
if($res=mysqli_fetch_assoc($data))
{
$ker=$res['LOGIN_ID'];
$name=$res['uname'];
$email=$res['email'];
$phone=$res['ph_no'];
//echo $ker;


if(isset($_POST['submit']))
{

$msg=$_POST['msg'];
//echo $msg;

  $sql2="INSERT INTO `tbl_feedback`( `LOGIN_ID`, `message`) VALUES ('$ker','$msg')";
if (mysqli_query($con,$sql2))
{
	//echo "Registered";
	
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

.column {
  float: left;
  width: 47%;
  padding: 20px;
  margin:22px;
   /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
input[type=text],input[type=textarea]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 22px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 18px;
  color: #afafb6;
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

<div class="row">
  <div class="column" >
    <h2 style="color:white;">Contact Us</h2>
	<div class="content">
      <div class="left-side">
		<div class="address details">
          <div class="topic">Address</div>
          <div class="text-one">R2FV+6Q7, Potheri</div>
          <div class="text-two">Chennai 603203</div>
        </div>
        <div class="phone details">
          
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          
          <div class="topic">Email</div>
          <div class="text-one">emeds@gmail.com</div>
          <div class="text-two">info.emeds@gmail.com</div>
        </div>
	</div>
	</div>
  </div>
  <div class="column" style="background-color:#fffefa;">
    <h2>Send Your Feedbacks</h2>
	<form action="#" method="post">
		<input type="text" id="name" name="name" value="<?php echo $name; ?>" disabled><br>
		<input type="text" id="email" name="email" value="<?php echo $email; ?>" disabled><br>
		<input type="text" id="phn" name="phn" value="<?php echo $phone; ?>" disabled><br>
		<input type="textarea" id="msg" name="msg" placeholder="Message" style="height:70px;"required><br>
		<input type="submit" name="submit" value="SEND" class="btn">
	</form>
  </div>
</div>

</body>
</html>
