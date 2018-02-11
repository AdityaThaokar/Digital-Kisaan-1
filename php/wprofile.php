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
$sql="select * from salerdetails where email='$emailw'";

$sel=mysqli_query($conn,$sql) or die(mysql_error()); 

while ($arr=mysqli_fetch_array($sel)) 
{
echo "<h4> Username:  ".$arr['username']."</h4>";
echo "<h4> Email: ".$arr['email']."</h4>";
echo "<h4> Phone: ".$arr['phone']."</h4>";
echo "<h4> Aadhar No.: ".$arr['aadhar']."</h4>";
echo "<h4> Shop Id.: ".$arr['shopid']."</h4>";
echo "<h4> Address: ".$arr['location']."</h4>";
}
?> 
</div>
<div style="display:flex;flex-direction: column;flex-grow: 1; justify-content: space-around;margin-top: 2%;">
<form id="form" action="additem.php"><input  type="submit" value="Add Item"  ></form>
<form id="form" action=""><input  type="submit" value="Remove Item" ></form>
<form id="form" action=""><input  type="submit" value="View Items" ></form></div>
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