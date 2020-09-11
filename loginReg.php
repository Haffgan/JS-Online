<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <?php
	
	$x = $_POST ['log'];
    $y = $_POST ['pas'];
	
	$con = mysqli_connect ("localhost", "root", "", "jsonline");
	$result = mysqli_query ($con, "SELECT * FROM employer WHERE username = '$x' AND password = '$y'");
	
		if (mysqli_num_rows ($result) == 1 )
		{ 
		session_start();
		$_SESSION['username'] = $x;
		header ("location: homepage.php");  
		exit();
		}
	
	else 
	{header ("location: login.php");}
mysqli_close($con);

	

    ?>
</body>
</html>
