<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
session_start();
$s = $_GET['z'];
$t = $_GET['c'];
$x = $_GET['a'];

$c = $_GET['s'];

$v = $_GET['x'];

$name = $_SESSION ['username']; 
//$v = $_GET['d'];
//$b = $_GET['un'];
//$g = $_GET['f'];

$con= mysqli_connect("sql205.epizy.com", "epiz_26717669", "IwqVkjNlyIHj6", "epiz_26717669_jsonline");
//$result = mysqli_query($con, "SELECT * employer.username, employer.name FROM employer WHERE employer.username = '$name'");
//$row =mysqli_fetch_array($result); // записал результат по таблиуе в переменную
//$us_nam = $row [5];

mysqli_query($con , "INSERT into job (JobTitle, Salary, Responsibilities, Requirements, Location, EmpUsername) VALUES ('{$s}','{$t}','{$x}','{$c}','{$v}','{$name}');") or die (mysqli_error($con)); //last_insert_id()
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

