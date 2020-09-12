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

  <script type="text/javascript">



    function SetColor (x){
      document.getElementById(x).style.backgroundColor = "rgb(255,255,204)";
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
background-color:rgb(255, 255, 255);
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
.image_about {
	position	: relative;
	width		: 100%; 
}

h2 {
	position	: relative;

	width		: 100%;
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 18px;
  color: #000000;
}
.btn {
     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
     font-size: 14px;
     display: inline-block; 
     background: rgb(18, 72, 94); 
     color: #fff; 
     padding: 1px 26px; 
     text-decoration: none; 
     border-radius: 4px; 
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
      font-size: 16px;}
      form {
  
	position: relative;
	top		: 0px;
	left		: 0px;
	width		: 100%;
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 18px;
  color: #000000;
  
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
    <h1 style="text-align:center;color: rgb(95, 95, 95" > 
        Job Search</h1>
  </div>
  <div class="col-1 logo">
    <p> <image src="Logo.png"</p>
  </div>
  

  <div class="row">
    <div class="col-12 menu">
      <a href="homepage.php" > Home Page </a> 
 
   <a href="EmployerPage.php" > Employer Page </a> 
   <a href="about.php" > About Us</a> 
   <a href="Feedback.php" > Feedback </a> 
   <a href="registration.php" > Registration </a> 
   <a href="Logout.php" > Logout </a> 
   
    </div>
  
    <div class="col-3">
    
  
    </div>
  <div class="col-6">
  
    </head>

      <form method="GET" action= "search.php" onsubmit="return checkform()">
      <fieldset>
      <legend>
        Find your job here:
      </legend>
      
           
      <input type="text" size="60" id ="y" name = "y" onfocus="SetColor('y')" onblur="ChangeColor('y')"/> <small>Job title </small><br />
      <input type="text" size="60" id ="z" name = "z" onfocus="SetColor('z')" onblur="ChangeColor('z')"/> <small>Specialization </small><br />
      <input type="text" size="60" id ="c" name = "c" onfocus="SetColor('c')" onblur="ChangeColor('c')"/> <small>Location </small><br />
      <input type="submit" value=" Search ">

      

    </fieldset>
  </form>
  </div>
  
  <div class="col-3">
    
  
  </div>
  
  <div class="col-12">
  <image src="search_crop.jpg"></image>
  </div>
  </body>
  </html>