<?php
$conn = new mysqli("localhost","root","","urbanservice");
?>
<html>
    <head>
    <script src="js.script.js"></script>
    <meta charset="UTF-8">
    <meta name="author" content="A Venu Arvind(2020115101)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Service-Login</title>
    <link href="../css/login.css" type="text/css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body>
<div class='bold-line-login'></div>
<div class='containerlogin'>
  <div class='window-login'>
    <div class='main-login'></div>
    <div class='content-login'>
      <div class='welcome-login'>Welcome to Urban Service</div>
      <div class='subtitle-login'>To use our services you need to login.If you do not have an account, please sign up.</div>
      <div class='input-fields-login'>
        <form class="loginform" method="post">
        <input type='email' name="loginemail" placeholder='Email' class='input-line full-width'></input>
        <input type='password' name="loginpass" placeholder='Password' class='input-line full-width'></input>
      </div>
      <div class='spacing-login'>If you do not  have an account, please click here to  <span class='highlight-login'><a class="tosign"href="signup.php" targdet="_self">Sign Up</a></span></div>
      <div><input type="submit" value="Login" class='ghost-round-login full-width'></div>
    
    </form>
    </div>
  </div>
</div>
</body>
</html>
<?php
if(isset($_POST['loginemail']) && isset($_POST['loginpass'])){
  $emaillogin=$_POST['loginemail'];
  $passlogin=$_POST['loginpass'];
  $sqllogin="SELECT * from signup WHERE Email='".$emaillogin."' and Password='".$passlogin."'";
  $result=$conn->query($sqllogin);
  if($result->num_rows>0){  
  session_start();
  $_SESSION['username']=$_POST['loginemail'];
  $_SESSION['password']=$_POST['loginpass'];
  header("location:../index.php");
  }
  else{
    echo "<script>alert('Invalid credentials!!!')</script>";
    echo "<script>location.replace(login.php)</script>";
  }
}
?>