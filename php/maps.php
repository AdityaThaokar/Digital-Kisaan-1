<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "digital_kisan"); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Locate the closest shop</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   <link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
		<link rel="stylesheet" type="text/css" href="../css/wprofile.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<script type="text/javascript" src="autocomplete.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
     #map{
		 height:70%;
	 }
    </style>
  </head>
  <body onload="initMap()"  >
  
  <div class="header" style="height:100px;width:100%;box-shadow: 1px 2px 4px 0px #4e4e4f;"> 
 <p><img src="../images/kisaanlogo.png" width="40px" >Digital Kisaan
 <input type="text" placeholder="Search" style="width:400px;height:30px;">
 <input type="submit" value="Search">
 </p>
 <ul style="margin-left:800px;"> 
   <li><a href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Log out</a></li>
 <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
  <li><a href="About.php"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
   <li><a href="contact.php"><i class="fa fa-phone"></i>&nbsp;Contact</a></li>
  <li><a href="current.php"><i class="fa fa-cloud"></i>&nbsp;Weather</a></li></div> 
 

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="bg" style="height:auto;"><div id="google_translate_element" style="margin-left:1170px;"></div>
            
<div class="container" style="width:900px;background:white;
	border-style: solid;
	border-radius:10px;
	border-width:1px;
	border-color:#e5e5e5;font-size:15px;height:500px;">  
  	<?php

  	$result = "SELECT location FROM salerdetails";
  	$sel=mysqli_query($connect,$result) or die(mysql_error()); 
	$storeArray = Array();
	while ($row = mysqli_fetch_array($sel)) {
    $storeArray[] =  $row['location'];  
	}
	echo '<div class="card-block" align="center">Your Location: '.$_SESSION['location'].'</div>';
  	?>
	
    <div id="map" class="card-block"></div>
     <div class="card-block" ><br><center>
          <input type="button" style="font-size:15px;" value="Your Location" onclick="codeAddress()" class="btn btn-success">
          <input type="button" style="font-size:15px;"value="Show nearby shops" onclick="showshop()" class="btn btn-success">
          <input type="button" style="font-size:15px;"value="Back" class="btn btn-danger" onclick="location='main.php'">
        </div>
		</div><br>
		<div class="Contact" id="contact1">
<p style="font-size:15px;color:white;">
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;DigitalKisaan@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
</p>
<h4 align="center">Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</div> 
    <script>
      	var map;
	var geocoder;		
	function initMap() {
		var mapLayer = document.getElementById("map");
		var centerCoordinates = new google.maps.LatLng(19.0952,74.7496);
		var defaultOptions = { center: centerCoordinates, zoom: 4, }

		map = new google.maps.Map(mapLayer, defaultOptions);
		geocoder = new google.maps.Geocoder();
		
}

function showshop(){
	<?php
	foreach($storeArray as $keys => $values)  
	{ ?>
		var address = '<?php echo $values; ?>';
		  geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location,
            animation: google.maps.Animation.BOUNCE,
            title: "<?php echo $values; ?>"
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
<?php } ?>
}

function codeAddress(){
	 var address = '<?php echo $_SESSION['location']; ?>';
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location,
            animation: google.maps.Animation.DROP,
            title: "<?php echo $_SESSION['username']; ?>'s Location"
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });

}	
	</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMNq3nuw5whsc1fdAbwX4bHWMLgCt4C6E&callback=initMap"
    async defer></script>
  </body>
</html>