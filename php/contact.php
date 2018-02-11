<?php 
include('server.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" type="text/css" href="../css/about.css">
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<title>About</title>
</head>
<body> 
<?php
 include('translate.php');
?> 
<div class="header">
 <p><img src="../images/kisaanlogo.png" width="40px" >Digital Kisaan</p>
 <ul>
  <li>Home</li>
  <li><a href="About.php">About</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li ><a href="current.php">Weather</a></li>
 </div>
 <div class="About">
<p>Contact</p>
<h5>
<img src="../images/toll.png" width="30px">Toll Free 1800-274-3131<br><br><br>
<img src="../images/email.png" width="30px">DigitalKisaan@service.com<br><br><br>
<img src="../images/franchize.png" width="30px">Franchise<br><br><br>
<img src="../images/feedback.png" width="30px">Feedback<br>
<form method="POST" action="contact.php">
<input type="text" placeholder="Enter email" name="sender" id="sender"><br>
<textarea rows="4" width="200px" scrolling="yes" placeholder="Give your feedback here" name="msg" id="msg"></textarea><br>
<input type="submit" value="send" name="send" id="send"></form>
</h5>
 </div>
 <div class="Contact" id="contact">
 <h4>Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</html>