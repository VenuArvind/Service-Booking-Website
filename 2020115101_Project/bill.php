<!DOCTYPE html>
<?php
$conn = new mysqli("localhost","root","","urbanservice");
session_start();
if(!isset($_SESSION['password'])){
   header("location:signup/login.php");
}
?>
<html>
<head>
<meta charset="UTF-8">
    <meta name="author" content="A Venu Arvind(2020115101)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Service-billing</title>
    <link href="css/bill.css" type="text/css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Venu Arvind">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="venu@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Chennai">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Tamil Nadu">
                <label for="date">Enter date of service</label>
                <input type="date">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="600030">
              </div>
            </div>
          </div>

          <div class="col-50">
          <img src="images/uslogo.jpeg" width="200" height="150" alt="uslogo1"><br>
            <h3>Payment</h3>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Venu Arvind">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="July">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2025">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="444">
              </div>
            </div>
          </div>
          
        </div>
        <input type="submit" name="pay" value="Pay Bill" class="btn" onclick="ending()">
      </form>
    </div>
  </div>
</div>

</body>
</html>
