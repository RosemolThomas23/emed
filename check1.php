<form name="myForm" autocomplete="on" onsubmit="return validateForm()">

<p><label>First name &#40;required&#41; <input type="text" id="firstName" 
autofocus="autofocus" /> </label></p> 

<p><label>Last name &#40;required&#41; <input type="text" id="lastName"/> </label></p>

<p> Email address &#40;required&#41;
<input type="text" id="email" /> </p> 

<p> Postcode &#40;required&#41;
<input type="text" id="postcode"/> </p> 

<p> Payment type &#40;required&#41;
<select id="paymentType" title="Choose a payment type">
  <option value="0">Select a payment option</option>
  <option value="visa">VISA</option>
  <option value="master">Mastercard</option>
  <option value="amer">American Express</option>
</select>
</p>

<p> Expiry date &#40;required&#41;
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

<select id="exYear" title="select a year">
 <option value="0">Enter year</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
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
</p>
<p><label>Credit card number &#40;required&#41; <input type="text" id="cardNumber"/> </label></p> 
<div id="centreimg">
<input type="submit" name="S1" value="Submit response" />
<input type="reset" name="reset" value="Clear form" /> 
</div>
</form> 
