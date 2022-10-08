<?php
$conn = new mysqli("localhost","root","","urbanservice");
session_start();
session_destroy();
$sqlend="DELETE FROM cart";
$resultend=$conn->query($sqlend);
echo "<script>window.location.replace('signup/login.php')</script>";
exit();
?>