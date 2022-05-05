<?php
include('dbconn.php');
session_start();
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pswd=$_POST['psw'];
	
	$query="SELECT * FROM `tbl_login` WHERE email='$email' AND password='$pswd' AND status=0 ";
	
	$res=mysqli_query($con,$query);
		
if(mysqli_num_rows($res)>0)
                    {
                       $_SESSION['name']=$email;
					   if(( $email =="admin@gmail.com"))
					   {
					   	$_SESSION['USE']=$email;
					   	
						   header('location:add_cat.php');
					   }
					   else{
					   	$_SESSION['USE']=$email;
                       header('location:home.php');

                           }					   
                     }
	
		else
		{
			$_SESSION['USE']=$email;
                       header('location:login.php');
		echo "invalid user";
		}
}

?> 

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css?v=1">
	<title>Login</title>
</head>
<body>
	
	<div class="container" id="container">
	
		<div class="form-container log-in-container">
			<form action="#" method="post">
				<h1>Login</h1>
				
				<span></span>
				<input type="email" placeholder="Email" name="email" required />
				<input type="password" placeholder="Password" name="psw" required />
				<a href="reg.php">Create new account</a>
				<button type="submit"  value="LOGIN" name="submit">LOGIN</button>		
				 
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h2>E-MEDS</h2>
					<p style="font-size=bold">Committed to provide you better health. You can expect the more care
					and less price of medicine from us</p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>