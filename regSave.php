<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$s = $_GET['nq'];
$t = $_GET['a'];
$x = $_GET['b'];

$c = $_GET['c'];
$v = $_GET['d'];
$b = $_GET['un'];
$g = $_GET['f'];

$con= mysqli_connect("localhost","root","", "jsonline");

mysqli_query($con , "INSERT into employer (name, businessArea, address, phoneNumber, email, username, password) VALUES ('{$s}','{$t}','{$x}','{$c}','{$v}','{$b}','{$g}');"); 
mysqli_close($con);

header("location: thanks1.php");



?>
</body>
</html>

