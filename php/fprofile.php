
<!DOCTYPE html>
<html>
	<head>
		<title>Profile
		</title>
		<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
		<link rel="stylesheet" type="text/css" href="../css/wprofile.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
        <script type="text/javascript" src="autocomplete.js"></script>
	</head>
	<body>
	
	<div class="header" style="height:100px;box-shadow: 1px 2px 4px 0px #4e4e4f;">
 <p><img src="../images/kisaanlogo.png" width="40px" >Digital Kisaan
 <input type="text" placeholder="Search" style="height:10px;">
 <input type="submit" value="Search">
 </p>
 <ul style="margin-left:900px;"> 
   <li><a href="logout.php">Log out</a></li>
   <li><a href="index.php">Home</a></li>
  <li><a href="About.php">About</a></li>
   <li><a href="contact.php">Contact</a></li>
  <li><a href="current.php">Weather</a></li></div> 
 

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="bg" style="height:auto;"><div id="google_translate_element" style="margin-left:1170px;"></div><br><h2>Farmer's Profile</h2>
<div class="profile" style="display: flex;flex-direction:row;justify-content: space-around;flex-grow: 1;">
<table  cellpadding="5" style="margin-top: 2%;">
<tr>
<td rowspan="5">
<img src="../images/Wprofile.jpg" width="170px" >
</td>
</table>
<div style="display: flex;flex-direction: column;color: #000000;margin-left: 5%;justify-content: flex-start;flex-grow: 2;">
<?php
include('server.php');
$conn=mysqli_connect("localhost","root","","digital_kisan");
$emailw = $_SESSION['email'];
$sql="select * from farmerdetails where email='$emailw'";

$sel=mysqli_query($conn,$sql) or die(mysql_error()); 

while ($arr=mysqli_fetch_array($sel)) 
{
echo "<h4> Username:  ".$arr['username']."</h4>";
echo "<h4> Email: ".$arr['email']."</h4>";
echo "<h4> Phone: ".$arr['phone']."</h4>";
echo "<h4> Aadhar No.: ".$arr['aadhar']."</h4>";
echo "<h4> Jandhan Id.: ".$arr['jandhan']."</h4>";
echo "<h4> Address: ".$arr['location']."</h4>";
}
?> 
</div>
<div style="display:flex;flex-direction: column;flex-grow: 1; justify-content: space-around;margin-top: 2%;">
<form id="form" action="chat.php"><input  type="submit" value="Chat Room" ></form></div>
</div>
<br><br>
<div class="Contact" id="contact1">
<p>
<img src="../images/toll.png" width="30px">Toll Free 1800-274-3131
<img src="../images/email.png" width="30px">DigitalKisaan@service.com
<img src="../images/franchize.png" width="30px">Franchise
</p>
<h4 align="center">Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</div> </div>
	</body>
</html>