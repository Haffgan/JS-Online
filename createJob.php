<!DOCTYPE html>
<html>
   <?php
session_start();
if (isset($_SESSION['username'])) {
	echo "  You are logged in as: " . $_SESSION['username'];	
	} 
	else {
	echo "You are not logged in!";	
	}
?>
<head>


  <script type="text/javascript">

function checkform()
   {
    CompN = document.getElementById('nq').value;
    JobT= document.getElementById('z').value;
    Address= document.getElementById('x').value;
    Salary = document.getElementById('c').value;
    Email = document.getElementById('v').value;
    PhoneN = document.getElementById('b').value;
    
    //ConfPas = document.getElementById('g').value;
      

    patternCN= /^[a-zA-Z]+[ ]*[a-zA-Z]+$/;
    patternJT= /^[a-zA-Z]+[ ]*[a-zA-Z]+$/;
    patternAD=/^[a-zA-Z]+[ ]*[a-zA-Z]+$/;
    patternS= /^([0-9]{5,7})$/;
    patternEm= /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.((com)|(my)|(net))$/i;
    patternP=/^([0][2][15790]{1})(\d{6,8})$/;
   



if (!patternCN.test(CompN))
    {
    alert("Please enter valid Campany Name");
    document.getElementById('nq').select();
    return false;
    }
    if (!patternJT.test(JobT))
    {
    alert("Please enter valid JOB Title");
    document.getElementById('z').select();
    return false;
    }
    if (!patternAD.test(Address))
    {
    alert("Please enter valid Adress");
    document.getElementById('x').select();
    return false;
    }
    if (!patternS.test(Salary))
    {
    alert("Please enter valid annual salary");
    document.getElementById('c').select();
    return false;
    }
    if (!patternEm.test(Email))
    {
    alert("Please enter valid EMAIL ADRESS");
    document.getElementById('v').select();
    return false;
    }

    if (!patternP.test(PhoneN))
    {
    alert("Please enter valid Phone 02 + 7-8 digits (No sapces allowed)");
    document.getElementById('b').select();
    return false;
    }
    

    

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
  
	position	: relative;

	width		: 100%;
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 18px;
  color: #000000;
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
      Create new job </h1>
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
   <a href="registration.php" > Registration </a> 
   <a href="Logout.php" > Logout </a> 
   
    </div>
  
    <div class="col-4">
    </div>
  <div class="col-4 header">
  
</head>

<form action="jobSave.php" method="GET" onsubmit="return checkform()">
<fieldset>
<legend>
  Please fill in all lines below:
</legend>

<input type="text" required  size="35" id ="z" name="z" onfocus="SetColor('z')" onblur="ChangeColor('z')"/> <small>Job Title  </small><br />
<input type="text" required  size="35" id ="x" name="x" onfocus="SetColor('x')" onblur="ChangeColor('x')"/> <small>Address</small><br />
<input type="text" required  size="35" id ="c" name="c" onfocus="SetColor('c')" onblur="ChangeColor('c')"/> <small>Annual Salary</small><br />
<input type="text" required  size="35" id ="v" name="v" onfocus="SetColor('v')" onblur="ChangeColor('v')"/> <small>Email address</small><br />
<input type="text" required  size="35" id ="b" name="b" onfocus="SetColor('b')" onblur="ChangeColor('b')"/> <small>Contact number</small><br />
<textarea required type="text"cols="35" rows="3"id ="a" name="a" onfocus="SetColor('a')" onblur="ChangeColor('a')"></textarea> <small> Responsibilities</small><br/>
 <textarea required type="text"cols="35" rows="3"id ="s" name="s" onfocus="SetColor('s')" onblur="ChangeColor('s')"></textarea> <small> Requirements</small><br/>
 <input type="submit" value=" Create ">
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