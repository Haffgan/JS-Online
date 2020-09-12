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
  background-color: rgb(94, 94, 94);
  
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
.image_about {
	position	: relative;
	width		: 100%; 
}

h2 {
	position:relative;
	
	width		: 100%;
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 18px;
  color: #000000;
}
fieldset {
      background-color: rgb(255, 255, 255);
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
    <h1 style="text-align:center;color: #ffffff" > 
      JS Online Information about us</h1>
  </div>
  <div class="col-1 logo">
    <p> <image src="Logo.png"</p>
  </div>
  <div class="row">
    <div class="col-12 menu">
      <a href="homepage.php" > Home Page </a> 
    <a href="jobsearch.php" > Job Search </a> 
   <a href="EmployerPage.php" > Employer Page </a> 
 
   <a href="Feedback.php" > Feedback </a> 
   <a href="registration.php" > Employer Registration </a> 
   
    </div>
  
  <div class="col-4">

     <fieldset>
    <h2>ABOUT COMPANY
      <br />
      <br />"JS-Online" is effective service for a job search. We can quickly find the right employee, 
      <br />and job seekers can get a good job. Our search uses artificial intelligence, 
      <br />and the site can process up to 100 requests per second. 
      <br />
      <br />Every day, we help hundreds of people change their lives for the better.
      </fieldset>
      </div>
  
      <div class="col-8">
        <image src="ceo.jpg"></image>
      </div>


      <div class="col-4">
      </div> 


<div class="col-4 bot">
  <h1 style="text-align:center;font-size: 12px;" > 
    
    </h2>Please contact us: Phone number 02 07 144 7878
    <br />E-mail: info@jss.co.nz
  
</div>

<div class="col-4">
</div> 

</body>
</html>