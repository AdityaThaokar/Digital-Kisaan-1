<?php
include ('translate.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Wholeseller Profile
		</title>
		<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
		<link rel="stylesheet" type="text/css" href="../css/wprofile.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
        <script type="text/javascript" src="autocomplete.js"></script>
	</head>
	<body>
	 <div class="header" style="color: white;position:fixed;top:0">
 <p><img src="../images/kisaanlogo.png" width="40px" >Digital Kisaan
 <input type="text" placeholder="Search">
 <input type="submit" value="Search">
 </p>
 <ul> 
   <li><a href="logout.php">Log out</a></li>
   <li><a href="index.php">Home</a></li>
  <li><a href="About.php">About</a></li>
   <li><a href="contact.php">Contact</a></li>
  <li><a href="current.html">Weather</a></li>
 </div> 
 
<div class="bg"><br><h2>Wholeseller Profile</h2>
<div class="profile">
<table  cellpadding="5">
<tr>
<td rowspan="5">
<img src="../images/Wprofile.jpg" width="170px">
</td>
<td>Name</td>
<td>:</td>
<td></td>
<tr>
<td>Email ID</td>
<td>:</td>
<td></td><tr>
<td>Adress</td>
<td>:</td>
<td></td><tr>
<td>Shop ID</td>
<td>:</td>
<td></td><tr>
<td>Aadhar No.</td>
<td>:</td>
<td></td>
</table>
<form id="form" action="" method="post" >
<input  type="submit" value="Add Item" style="margin-left:30px;">
<input  type="submit" value="Remove Item" style="margin-left:300px;">
<input  type="submit" value="Update Profile" style="margin-left:320px;">
</form>
</div>
<br><br><br>
<div class="Contact" id="contact1">
<p>
<img src="../images/toll.png" width="30px">Toll Free 1800-274-3131
<img src="../images/email.png" width="30px">DigitalKisaan@service.com
<img src="../images/franchize.png" width="30px">Franchise
<br></p>
<h4>Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</div> </div>
	</body>

</html>