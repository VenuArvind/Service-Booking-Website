<!DOCTYPE html>
<?php
$conn = new mysqli("localhost","root","","urbanservice");
session_start();
if(!isset($_SESSION['password'])){
   header("location:signup/login.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="A Venu Arvind(2020115101)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Service-salon</title>
    <link href="../css/index.css" type="text/css" rel="stylesheet">
    <script src="../js/script.js"></script>
</head>
<body>
    <header class="navigation" id="myHeader">
        <ul class="container">
            <li class="nav1" id="one"><img src="../images/uslogo.jpeg" alt="US logo" width="100" height="100"></li>
            <li class="nav1" id="two"><a class="Title" href="../index.php" target="_self">Urban Service</a></li>
            <li class="navele1"><a class="hlinks" href="../index.php" target="_self">Home</a></li>
            <li class="navele1"><a class="hlinks" href="../about/about.php" target="_self">About Us</a></li>
            <div class="dropdown">
            <li class="navele"><span class="dropbtn">Services</span></li>
            <div class="dropdown-content">
            <a href="../appliances/app.php">Appliances</a>
            <a href="../salon/salonmain.php">Salon</a>
            <a href="../cleaning/cleaningmain.php">Cleaning</a>
            </div>
            </div>
            <li class="navele1"><a class="hlinks" href="../cart/cart.php" target="_self">Cart</a></li>
            <li class="navele1"><a class="hlinks" href="../logout.php" target="_self">Logout</a></li>
        </ul>
    </header>
    <main>
        <div class="contiain1">
            <ul class="contain">
            <li class="conele">
            <ul class="left">
                <li><h1>Salon Services for both Men and Women</h1><br><br></li>
                <li class="textele">Expert Stylists with atleast 5 years of experience</li>
                <br><br><br>
                <li class="textele">Proper Sanitization and SOP's</li>
                <br><br><br>
                <li class="textele">Look your best for any Occasion</li>
                <br><br><br>
            </ul></li>
            
            <li class="conele">
            <img src="../images/haircutmen.jpg" width="650" height="400" alt="hcut">
            </li>
        </ul>
        </div>
    </main>
    <br><br><br>
    <div class="salonmenu">
        <form method="post">
            <?php
        
            $sqlac="SELECT * FROM salon";
            $result=$conn->query($sqlac);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
            echo"<button type='button' class='accordion' onclick='name()'>".$row['Productname']."-".$row['Category']."</button>";
            echo"<div class='panel'>";
            echo "<p>Product Name: ".$row['Productname']."<br><br>";
            echo "Product description: ".$row['Productdescription']."<br><br>";
            echo "Price: &#8377;".$row['Price']."<br><br>";
            echo "<input type='checkbox' value='".$row["Id"]."' name='cart[]'>Add to cart";
            echo "<br><br>";
            echo "</div>";
                }
            }
        ?> 
        <script>
            var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
        panel.style.display = "none";
        } else {
        panel.style.display = "block";
        }
        });
        } 
        </script>
        <br><br>
        <input name="tocartsalon"class="tocartapp" type="submit" value="Move to Cart">
        <br><br>
            </form>
            <?php
if(isset($_POST['cart'])){
    foreach($_POST['cart'] as $i){
        $sqlcart="INSERT into cart values('$i')";
    $resultcart=$conn->query($sqlcart);
    }
    echo "<script>window.location.replace('../cart/cart.php')</script>";
}
?>
    </div>
    <footer class="ending">
        <nav class="end">
            <div class="container1">
                <h3>Contact</h3>
                <br>
                <p class="a4">
                    Head Office:<br>
                    Locality: Adyar<br>
                    City: Chennai<br>
                    State:Tamil nadu<br> 
                    </p>
                    Phone <a class="phone" href="tel:919494605679">:919494605679</a><br>
                    Landline <a class="phone" href="tel:04434543454">:04434543454</a><br> 
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31099.627260881265!2d80.24177580895177!3d13.006773278122665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267ed15c41681%3A0x6569ce967a249e83!2sAdyar%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1625062768299!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="container1">
               <h3>Menu</h3>
               <br>
               <ul class="links">
                   <li class="a2"><a class="flinks" href="../index.php" target="_self">Home</a></li>
                   <li class="a2"><a class="flinks" href="../about/about.php" target="_self">About Us</a></li>
                   <li class="a2"><a class="flinks" href="../cart/cart.php" target="_self">Cart</a></li>
                      
               </ul>
               <br><br><br><br><br><br><br><br>
           <p class="copyright">
                   <br><br><br><br><br><a class="gotop" href="#top">Go back to the Top</a>
                   <br><br><br>
                   <i>©Copyright 2011-2025.<br>All rights reserved.Powered by <em>Present solution.</em></i>
               </p>
            </div>   
            <div class="container1">
                <h3>Newsletter</h3>
                <br>
                <form name="emailv" method="POST">
                <input type="email" name="emailv1" placeholder="   Your email address" size="20">
                <input type="submit" name="Validate" value="Sign Up" onclick="ValidateEmail(document.emailv.emailv1)"/>
                </form>
                <br><br><br>
                <ul class="logos">
                    <li class="a1"><a href="https://www.facebook.com/" target="_blank"><img class="logo1" src="../images/fblogo1.jpg" width="25" height="23" alt="fb"></a></li>
                    <li class="a1"><a href="https://www.instagram.com/" target="_blank"><img class="logo1"src="../images/inslogo.png" width="25" height="23" alt="ig"></a></li>
                    <li class="a1"><a href="https://twitter.com/?lang=en" target="_blank"><img class="logo1" src="../images/twitterlogo1.png" width="25" height="23" alt="tw"></a></li>
                    <li class="a1"><a href="https://www.youtube.com/" target="_blank"><img class="logo1" src="../images/ytlogo.png" width="25" height="23" alt="yt"></a></li>
                </ul>
            </div> 
        </nav>
    </footer>
</body>
</html>