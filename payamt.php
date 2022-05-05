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
  width:50%
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
	function validateForm() {
	  var x = document.forms["myForm"]["name"].value;
	  if (x == "" || x == null) {
		alert("Name must be filled out");
		return false;
	  }
	}
    function pay_now(){
        var name=jQuery('#name').val();
        var amt=jQuery('#amt').val();
        
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+amt+"&name="+name,
               success:function(result){
                   var options = {
                        "key": "rzp_test_sNi1Kb8hhLsH46", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Acme Corp",
                        "description": "Test Transaction",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>
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
		<li><a href="cart.php">MY CART</a></li>
		<li><a href="home.php">HOME</a></li>
			
		</ul>
	
	</div>
	
	<br>
	<div class="aimg">
		

	</div>
	</div>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php" >
      
        <div class="row">
          <div class="col-50">
            
            <label for="fname"> Name</label>
            <input type="text" id="name" name="name" placeholder="" >
			
            <label for="amt">Amount</label>
                <input type="text" id="amt" name="amt" placeholder="">
          
        </div>
        
        
		<input type="button" class="btn" name="btn" id="btn" value="Pay Now" onclick="pay_now()"/>
      </form>
	  
    </div>
  </div>
  
</div>

</body>
</html>
