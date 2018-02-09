<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/login.css">

<title>Login</title>
</head>
<body>
<?php
 include('translate.php');
?> 
<div class="header">
 <p><img src="../images/kisaanlogo.png" width="40px">Digital Kisaan<p>
 <ul>
  <li>Home</li>
  <li>About</li>
  <li>Contact</li>
  <li ><a href="current.html">Weather</a></li>
 </div>
 <div class="flexcontainer">
 <div class="login">
     <p align="center">Farmer Login </p>
     <input type="text" placeholder="Enter username"><br><br>
	 <input type="password" placeholder="Enter password"><br><br>
     <input  type="submit" value="Login">
   <div class="footr">
     <p>New user ? Click <a href="./FarmerSignup.php">here</a> to create an account</p>  
	 </div>	</div>
<div class="seller">
     <p align="center">Wholesaler Login</p>
     <input type="text" placeholder="Enter username"><br><br>
	 <input type="password" placeholder="Enter password"><br><br>
     <input  type="submit" value="Login">
   <div class="footr">
     <p style="font-size:15px;">New user ? Click <a href="./SellerSignup.php">here</a> to create an account</p>    
   </div>	 	 
  </div>  
 </div>
</html>