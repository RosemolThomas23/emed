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
select {
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
<script>
function validateForm()
{
var firstName=document.getElementById("fname");
if (firstName.value===""){
                        alert("Please enter your first name");
                        firstName.focus();
                        return false;
            }
            

var postcode=document.getElementById("zip");
if (postcode.value.length!=6  || isNaN(postcode.value)){
                        alert("Please enter 6 digit pincode");
                        postcode.focus();
                        return false;
            }
	var cardname=document.getElementById("cname");
	if (cardname.value===""){
                        alert("Please enter Name on Card");
                        cardname.focus();
                        return false;
            }
var re16digit=/^\d{16}$/
 if (ccnum.value.search(re16digit)==-1){
 alert("Please enter your 16 digit credit card numbers");
 return false;
 }

var exMonth=document.getElementById("exMonth").value;
if (exMonth.selectedIndex === 0){
            alert("Please select the month");
            return false;
        }
var exYear=document.getElementById("exYear").value;


if (exYear.selectedIndex === 0){
            alert("Please select the year");
            return false;
        }
		

            alert("Thank you for your submission");
            return true;

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
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checkout Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      
      <form name="myForm" action="payamt.php" onsubmit="return validateForm()"  >
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname" ><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="">
            
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="">
            <label for="expmonth">Exp Month</label>
			<select id="exMonth" title="select a month">
				<option value="0">Enter month</option>
				<option value="01">January</option>
				<option value="02">February</option>
				<option value="03">March</option>
				<option value="04">April</option>
				<option value="05">May</option>
				<option value="06">June</option>
				<option value="07">July</option>
				<option value="08">August</option>
				<option value="09">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <select id="exYear" title="select a year">
					
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					<option value="2026">2026</option>
					<option value="2027">2027</option>
					<option value="2028">2028</option>
					<option value="2029">2029</option>
					<option value="2030">2030</option>
					<option value="2031">2031</option>
			</select>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="" required>
              </div>
            </div>
          </div>
          
        </div>
        
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  
</div>

</body>
</html>
