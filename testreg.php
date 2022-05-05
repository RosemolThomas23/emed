<?php
include 'dbconn.php';

if(isset($_POST['submit']))
{
$name=$_POST['uname'];
//echo $name;
$ph=$_POST['phn'];
//echo $ph;
$email=$_POST['email'];
//echo $email;
$pswd=$_POST['pswd'];
//echo $pswd;
  $sql="INSERT INTO `tbl_login`(`uname`, `email`, `ph_no`, `password`,`status`) VALUES ('$name','$email','$ph','$pswd',0)";
if (mysqli_query($con,$sql))
{
	//echo "Registered";
	header("location:login.php");
}
else
{
	echo mysqli_errno($con);
}
}
?>

<html>
<head>
	<link rel="stylesheet" href="style1.css?v=1">
	<title>Registration</title>
	<style>
		span{
			color:red;
		}
	</style>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="#" method="POST" onsubmit="return validate();">
				<h1>Register Here!</h1>				
				<br><br>
				<input type="text" id="uname" placeholder="Username" name="uname"  />
				<span></span>
				<input type="text" id="email" placeholder="Email" name="email"  />
				<span></span>
				<input type="text" id="phn" placeholder="Mobile" name="phn"  />
				<span></span>	
				<input type="password" id="pswd" placeholder="Password" name="pswd"  />	
				<input type="password" id="cpswd" placeholder="Confirm Password"  />
				<span></span>	
				<span></span>
				<br><br><br><br>
				<button type="submit" id="submit" value="REGISTER" name="submit">REGISTER</button>				
			</form>
		</div>		
	</div>
</body>
<script type="text/javascript">
function validate()
{  
 
if(document.getElementById('uname').value.length==0 || 
document.getElementById('email').value.length==0 || document.getElementById('phn').value.length==0 ||
 document.getElementById('pswd').value.length==0 || document.getElementById('cpswd').value.length==0)
{
span[4].innerText = "Complete the registration";
  span[4].style.color = 'red';
return false;
}

}
  let name = document.getElementById('uname');
  let email = document.getElementById('email');
  let span = document.getElementsByTagName('span');
  let phn = document.getElementById('phn');
  let pswd = document.getElementById('pswd');
  let cpswd = document.getElementById('cpswd');
  name.onkeyup = function()
  {
  var regex = /^([\.\_a-zA-Z]+)([a-zA-Z ]+){1,30}$/;
  if(regex.test(name.value))
  {
  span[0].innerText = "";
  span[0].style.color = '#28fc7a';
  name.style.borderColor= '#28fc7a';

  }
  else
  {
  span[0].innerText = "enter a valid name";
  span[0].style.color = 'red';
  name.style.borderColor= 'red';

  }
  }
	email.onkeyup = function(){
	const regex= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(email.value.match(regex))
	{
		span[0].innerText = "";
		span[0].style.color = '#28fc7a';
		name.style.borderColor= '#28fc7a';
	}
	else
	{
		
		span[1].innerText = "your email is invalid";
		span[1].style.color = 'red';
	}

  
 
 phn.onkeyup = function(){
   const regexn = /^[0-9]{10}$/;
   if(regexn.test(phn.value))
  {
  span[2].innerText = "";
  span[2].style.color = '#28fc7a';
  }
  else
  {
  span[2].innerText = "your number is invalid";
  span[2].style.color = 'red';
  }
  }
 
   cpswd.onkeyup = function(){
   if (document.getElementById('pswd').value==document.getElementById('cpswd').value)
  {
  span[3].innerText = "";
  span[3].style.color = '#28fc7a';
  }
  else
  {
  span[3].innerText = "password doesn't match";
  span[3].style.color = 'red';
  }
  }
 </script>
</html>