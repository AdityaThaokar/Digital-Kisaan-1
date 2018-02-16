<?php 
include('server.php');
?>
<html>
<head><link rel="stylesheet" type="text/css" href="../css/about.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">

<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<title>About</title>
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
 <div class="About">
<p>Contact</p>
<h5>
<img src="../images/toll.png" width="30px">Toll Free 1800-274-3131<br><br><br>
<img src="../images/email.png" width="30px">DigitalKisaan@service.com<br><br><br>
<img src="../images/franchize.png" width="30px">Franchise<br><br><br>
<img src="../images/feedback.png" width="30px">Feedback<br>
<form method="POST">
<input type="email" placeholder="Enter your email id" name="sender" ><br>
<textarea rows="4" width="200px" scrolling="yes" placeholder="Give your feedback here" name="msg"></textarea><br>
<input type="submit" value="Send" name="send" id="send"></form>
</h5>
<br>
 </div>
 <div class="Contact" id="contact" >
 <h4>Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</html>