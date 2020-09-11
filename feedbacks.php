<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$ema = $_POST ['vq'];
$nam = $_POST ['nq'];
$fee = $_POST ['cq'];

//$c = $_GET['s'];
//$v = $_GET['d'];
//$b = $_GET['un'];
//$g = $_GET['f'];

$con= mysqli_connect("localhost","root","", "jsonline");

mysqli_query($con , "INSERT into feedback (name, email, message) VALUES ('{$nam}','{$ema}','{$fee}');"); 
mysqli_close($con);

header("location: thanks1.php");

//echo "<h2> Your name is: " . $s . "</h2>";
//echo "<h2> Your Business area is: " . $t . "</h2>";

//echo "<h2> Your Address is: " . $x . "</h2>";

//echo "<h2> Your Phone number is: " . $c . "</h2>";
//echo "<h2> Your Email is: " . $v . "</h2>";
//echo "<h2> Your Username is: " . $b . "</h2>";
//echo "<h2> Your password is: " . $g . "</h2>";

?>
</body>
</html>

