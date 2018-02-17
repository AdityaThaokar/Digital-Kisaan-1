<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "digital_kisan"); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Locate</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
      #map {
        height: 70%;
      }
      html, body {
        height: 100%;
      }
    </style>
  </head>
  <body onload="initMap()" class="container">
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
     <div class="card-block">
          <input type="button" value="Your Location" onclick="codeAddress()" class="btn btn-success">
          <input type="button" value="Show nearby shops" onclick="showshop()" class="btn btn-success">
        </div>
    <script>
      	var map;
	var geocoder;		
	function initMap() {
		var mapLayer = document.getElementById("map");
		var centerCoordinates = new google.maps.LatLng(37.6, -95.665);
		var defaultOptions = { center: centerCoordinates, zoom: 4 }

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
            animation: google.maps.Animation.BOUNCE 
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
            animation: google.maps.Animation.BOUNCE,
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