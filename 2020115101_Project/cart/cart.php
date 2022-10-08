<!DOCTYPE html>
<?php
$conn = new mysqli("localhost","root","","urbanservice");
session_start();
//if(!isset($_SESSION['password'])){
 //   header("location:../signup/login.php");
//}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="A Venu Arvind(2020115101)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Service-appliances</title>
    <link href="../css/index.css" type="text/css" rel="stylesheet">
    <script src="../js/script.js"></script>
    <style>
        main{
            padding:20px;
            padding-left:50px;
        }
        table{
            border:2px solid black;
          }
          th,td{
            padding:20px;
          }
          th{
              border:1px solid black;
              color:white;
              background-color:black;
          }
           
      }

    </style>
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
    <?php
$neededid = array();
$idfromcart= "select * from cart";
$idresult = $conn->query($idfromcart);
//Inserting selected ids into an array
if($idresult->num_rows>0)
{
    while($row=$idresult->fetch_assoc())
    {
        array_push($neededid,$row["Id"]);
    }
}

$sum=0;
//displaying all contents of selected books and calculating total price 
echo "<form method='post'>";
echo "<table>";
    echo "<tr><th>"."Product-name"."</th><th>"."Category"."</th><th>"."Id"."</th><th>"."Price"."</th><th>"."Remove"."</th></tr>";
for($i=0;$i<count($neededid);$i++){
    if($neededid[$i]==1001 or $neededid[$i]==1002 or $neededid[$i]==1003 ){
    $sqll="SELECT * from appliances where Id='$neededid[$i]'";
    $resultl=$conn->query($sqll);
    }else if($neededid[$i]==1004 or $neededid[$i]==1005){
        $sqll="SELECT * from cleaning where Id='$neededid[$i]'";
    $resultl=$conn->query($sqll);
    }else if($neededid[$i]>=1006 and $neededid[$i]<=1014){
        $sqll="SELECT * from salon where Id='$neededid[$i]'";
    $resultl=$conn->query($sqll);

    }
    
    if($resultl->num_rows>0){
        while($row=$resultl->fetch_assoc()){
            echo "<tr><td>".$row['Productname']."</td><td>".$row['Category']."</td><td>".$row['Id']."</td><td>".$row['Price']."</td>";
            echo "<td><input type='checkbox' value='".$row["Id"]."' name='cartend[]'>Remove</td></tr>";
            $sum=$sum+$row['Price'];
        }    
    }   
}
echo "</table>";
echo "<br><br>";
//Remove function 
echo "<input class='confirmremove' type='submit' value='confirm remove'><br><br>";
echo "</form>";
if(isset($_POST['cartend'])){
    foreach($_POST['cartend'] as $j){
        $sqlcart="DELETE from cart where Id='$j'";
    $resultcart=$conn->query($sqlcart);
    }
    echo "<script>setTimeout(function(){ window.location.replace('cart.php'); }, 200);</script>";
    //Replacing page after removing
}
echo "<br><br>";
echo "<h1>Total Amount is</h1>".$sum;
echo "<br><br><br><br><a class='tobill' href='../bill.php'<button>Move to Billing Page</button></a>";
?> 
    </main>
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