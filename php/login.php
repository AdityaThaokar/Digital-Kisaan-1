<?php
 include('server.php');
?> 
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<script type="JavaScript"></script>
<title>Login</title>
</head>
<body>

<div class="header" style="height:100px;box-shadow: 1px 2px 4px 0px #4e4e4f;">
 <p><img src="../images/kisaanlogo.png" width="40px" >Digital Kisaan</p>
 <div id="google_translate_element" style="margin-left:1170px;"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <ul> 
   <li><a href="index.php">Home</a></li>
  <li><a href="About.php">About</a></li>
   <li><a href="contact.php">Contact</a></li>
  <li ><a href="current.php">Weather</a></li>
 </div> 
 <div style="margin-left: 10%;"><?php include('errors.php'); ?></div>
 <div class="flexcontainer">
 <div class="login">
     <p align="center">Farmer Login </p>
     <form id="form" name="fForm" action="login.php" onsubmit="return validateFormf()" method="post">
     <input type="text" placeholder="Enter Email Id" name="email"><br><br>
	 <input type="password" placeholder="Enter password" name="password"><br><br>
     <input  type="submit" value="login" name="login">
   </form>
   <div class="footr">
     <p>New user ? Click <a href="./FarmerSignup.php">here</a> to create an account</p>  
	 </div>	</div>
<div class="seller">
     <p align="center">Wholesaler Login</p>
     <form id="form" name="wForm" action="login.php" onsubmit="return validateFormW()" method="post">
     <input type="text" placeholder="Enter Email Id" name="emailw"><br><br>
	 <input type="password" placeholder="Enter password" name="passwordw"><br><br>
     <input  type="submit" value="login" name="loginw"></form>
   <div class="footr">
     <p style="font-size:15px;">New user ? Click <a href="./SellerSignup.php">here</a> to create an account</p>    
   </div>	 	 
  </div>  
 </div>
</html>