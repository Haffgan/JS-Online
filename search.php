<!DOCTYPE html>
<html>
 <?php
 session_start ();
if (isset($_SESSION['username'])) {
	echo "  You are logged in as: " . $_SESSION['username'];	
	} 
	else {
	echo "You are not logged in!";	
	}
?>
<head>
</head>
<body>


<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript">
  
   function checkform()
   {
    CompN = document.getElementById('nq').value;
    BusA= document.getElementById('a').value;
    Address= document.getElementById('b').value;
    Phone = document.getElementById('c').value;
    Email = document.getElementById('d').value;
    Username = document.getElementById('un').value;
    Password = document.getElementById('f').value;
    //ConfPas = document.getElementById('g').value;
      

    patternCN= /^[a-zA-Z]+[ ]*[a-zA-Z]+$/;
    patternBA= /^[a-zA-Z]+[ ]*[a-zA-Z]+$/;
    patternAD=/^[a-zA-Z]+[ ]*[a-zA-Z]+$/;
    patternP=/^([0][2][15790]{1})(\d{6,8})$/; 
    patternEm= /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.((com)|(my)|(net))$/i;
    patternUN=/^([0-9a-zA-Z]{6,})$/i;
    patternPAS= /^([0-9a-zA-Z]{6,})$/i;
    



    if (!patternCN.test(CompN))
    {
    alert("Please enter valid Campany Name");
    document.getElementById('nq').select();
    return false;
    }
    if (!patternBA.test(BusA))
    {
    alert("Please enter valid Busines AREA");
    document.getElementById('a').select();
    return false;
    }
    if (!patternAD.test(Address))
    {
    alert("Please enter valid Adress");
    document.getElementById('b').select();
    return false;
    }
    if (!patternP.test(Phone))
    {
    alert("Please enter valid Phone 02 + 7-8 digits (No sapces allowed)");
    document.getElementById('c').select();
    return false;
    }
    if (!patternEm.test(Email))
    {
    alert("Please enter valid EMAIL ADRESS");
    document.getElementById('d').select();
    return false;
    }
    if (!patternUN.test(Username))
    {
    alert("USERNAME should be at least 6 alphanumeric characters");
    document.getElementById('un').select();
    return false;
    }
    if (!patternPAS.test(Password))
    {
    alert("Password should be at least 6 alphanumeric characters");
    document.getElementById('f').select();
    return false;
    }
    
    /*if (f!=g) ПРОВЕРИТЬ (ПОДТВЕРЖДЕНИЕ ПАРОЛЯ!!!)
    {
    alert("Confirmation Password don't match");
   
    return false;
    }*/
   
  return true;
}


   
    function SetColor (x){
      document.getElementById(x).style.backgroundColor = "yellow";
    }
  
    function ChangeColor (x){
      document.getElementById(x).style.backgroundColor = "white";
      document.getElementById(x).style.color = "rgb(18, 72, 94)";
    }
    
  
  
    </script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
}

body {
  margin: 0;
  }

.row::after {
  content: "";
  clear: both;
  display: block;
}



.col-1 {width: 8.33%; float: left;
  padding: 15px;}
.col-2 {width: 16.66%; float: left;
  padding: 15px;}
.col-3 {width: 25%; float: left;
  padding: 15px;}
.col-4 {width: 33.33%; float: left;
  padding: 15px;}
.col-5 {width: 41.66%; float: left;
  padding: 15px;}
.col-6 {width: 50%; float: left;
  padding: 15px;}
.col-7 {width: 58.33%; float: left;
  padding: 15px;}
.col-8 {width: 66.66%; float: left;
  padding: 15px;}
.col-9 {width: 75%; float: left;
  padding: 15px;}
.col-10 {width: 83.33%; float: left;
  padding: 15px;}
.col-11 {width: 91.66%; float: left;
  padding: 15px;}
.col-12 {width: 100%; float: left;
  padding: 15px;}



.header 
{
  background-color: rgb(255, 255, 255);
  color: #505050;
  padding: 5px;
}
.logo 
{
  background-color: #11ffee00;;
  color: #11ffee00;
  padding: 0px;
  margin: 0px;
  margin-left: auto;
  margin-right: auto;
}
 

.menu { overflow: hidden;
  background-color: rgb(94, 94, 94);
  }


.menu a {

  float: left;
  display: block;
  
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.menu a:hover {
  background-color:gray;
}

.reg
{
  overflow: hidden;
  background-color: rgb(255, 255, 255);
  
}
.reg a {

float: right;
display: block;

color: #ffffff;
text-align: center;
padding: 0px 0px;
text-decoration: none;
}

.reg a:hover {
background-color:gray;
}

.bot
{
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 10px;
text-align: left;
}

img {
 max-width:100%;
 height: auto;
 display: block;
    margin-left: auto;
    margin-right: auto;
}

.table {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 14px;
border-collapse: collapse;
text-align: center;
}
th, td:first-child {
background: gray;
color: white;
padding: 11px 20px;
}
th, td {
border-style: solid;
border-width: 0 1px 1px 0;
border-color: white;
}
td {
background: #D8E6F3;
}
th:first-child, td:first-child {
text-align: center;
}
form {
  
	position: relative;
	top		: 0px;
	left		: 0px;
	width		: 100%;
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 18px;
  color: #000000;
}
input {
width: calc (100% - 150px);
}

fieldset {
      background-color: rgb(161, 161, 161);
    }
    legend{
      background-color: rgb(161, 161, 161);
      position:relative;
      /*border: 0.1px solid rgb(109, 109, 109); */
      padding: 1px; 
      font-style:normal;
      font-size: 16px;
    }

</style>
</head>
<body>

<div class="header">
  
  <div class="col-1 logo">
    <a href="homepage.php">
    <p> <image src="Logo.png"</p>
  </div>

  <div class="reg col-10">
    <a href="Employer Page.php"></a>
    <h1 style="text-align:center;color: rgb(95, 95, 95)" > 
      Employer Registration Form </h1>
  </div>
  <div class="col-1 logo">
    <p> <image src="Logo.png"</p>
  </div>
  <div class="row">
    <div class="col-12 menu">
      <a href="homepage.php" > Home Page </a> 
    <a href="jobsearch.php" > Job Search </a> 
   <a href="Employer Page.php" > Employer Page </a> 
   <a href="about.php" > About Us</a> 
   <a href="Feedback.php" > Feedback </a> 
   <a href="Logout.php" > Logout </a> 
   
    </div>
  
    <div class="col-4">
   
    </div>
 <div class="col-4">
<form action="regSave.php" method="GET" onsubmit="return checkform()">
<fieldset>

<?php


if (isset($_GET['y']) && isset($_GET['c']) && isset($_GET['z']))
	{
$x = $_GET['y'];
$z = $_GET['z'];
$t = $_GET['c'];

	$connection = mysqli_connect("localhost","root","","jsonline");

	$result = mysqli_query($connection, "Select * FROM job, employer WHERE JobTitle = '$x' AND address = '$t' AND businessArea = '$z';") or die(mysqli_error($connection));
	
	while( $row = mysqli_fetch_array($result))
	{	
		
		echo "<p> Company:". $row['name']."<p>";
		echo "<p> Job Title:". $row['JobTitle']."<p>";
		echo "<p> Salary: ". $row['Salary'] . "<p/>";
		echo "<p> Location: ". $row['Location'] . "<p/>";
		echo "<p> Responsibilities: ". $row['Responsibilities'] . "<p/>";
		echo "<p> Requirements: ". $row['Requirements'] . "<p/>";
		echo "<br/><br/>";
		/*
				echo "<p> Contacts: ". $row[7] . "<p/>";*/
		
	}
	mysqli_close($connection);
	
	}
else
	{
	echo "<h4> Start search to see the results.</h4>";
	}

?>
</fieldset>
</form>
</div>

<div class="col-4">
  

</div>

<div class="col-12">
<image src="city crop.jpg"></image>
</div>
</body>
</html>
</body>
</html>

