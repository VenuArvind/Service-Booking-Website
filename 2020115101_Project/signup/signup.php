<?php
$conn = new mysqli("localhost","root","","urbanservice");
session_start();
?>
<html>
    <head>
    <script src="js.script.js"></script>
    <meta charset="UTF-8">
    <meta name="author" content="A Venu Arvind(2020115101)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Service-Sign Up</title>
    <link href="../css/signup.css" type="text/css" rel="stylesheet">
    <script src="../js/script.js"></script>
</head>
<body>
<div class='bold-line-sign'></div>
<div class='container-sign'>
  <div class='window-sign'>
    <div class='main-sign'></div>
    <div class='content-sign'>
      <div class='welcome-sign'>Welcome to Urban Service</div>
      <div class='subtitle-sign'>To use our services, create an account</div>
      <div class='input-fields-sign'>
        <form class="signform" name="myform" method="post">
        <input type='text' name='signame' placeholder='Name' class='input-line full-width'></input>
        <input type='email' name="signemail" placeholder='Email' class='input-line full-width'></input>
        <input type='password' name="signpass" placeholder='Password' class='input-line full-width'></input>
        <input type='password' name="signpass1" placeholder='Confirm Password' class='input-line full-width'></input>
      </div>
      <div class='spacing-sign'>If you already have an account, please click here to  <span class='highlight-sign'><a class="tologin"href="login.php" targdet="_self">Log in</a></span></div>
      <div><input type="submit" class='ghost-round-sign full-width' value="Create an Account"></div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
<?php
if(isset($_POST['signame']) && isset($_POST['signemail']) && isset($_POST['signpass']) && isset($_POST['signpass1'])){
  $name=$_POST['signame'];
  $email=$_POST['signemail'];
  $pass=$_POST['signpass'];
  $cpass=$_POST['signpass1'];
  if($pass==$cpass){
  $sqlcheck="SELECT * FROM signup where Email='".$email."'";
  $resultcheck=$conn->query($sqlcheck);
  if($resultcheck->num_rows>0){
    echo "<script>alert('Account already exists. Please login')</script>";
    header("location:login.php");
  }
  else{
  $sqls="INSERT INTO signup(`Name`, `Email`, `Password`) VALUES ('".$name."','".$email."','".$pass."')";
  $result1=$conn->query($sqls);
  echo "<script>alert('Account had been successfully created')</script>";
  }
}
}
?>