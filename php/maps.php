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
	print_r($storeArray);
	echo '<div class="card-block" align="center">Your Location: '.$_SESSION['location'].'</div>';
  	?>
    <div id="map" class="card-block"></div>
     <div class="card-block">
          <input type="button" value="Your Location" onclick="codeAddress()" class="btn btn-success">
          <input type="button" value="Show nearby shops" onclick="shopmarkers()" class="btn btn-success">
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
		
		<?php 
            if(!empty($countryResult)) 
            {
                foreach($countryResult as $k=>$v)
                {   
         ?>  
         	geocoder.geocode( { 'address': '<?php echo $countryResult[$k]["country"]; ?>' }, function(LocationResult, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					var latitude = LocationResult[0].geometry.location.lat();
					var longitude = LocationResult[0].geometry.location.lng();
				} 
        	    		new google.maps.Marker({
            	        position: new google.maps.LatLng(latitude, longitude),
            	        map: map,
            	        title: '<?php echo $countryResult[$k]["country"]; ?>'
            	    });
			});
	    <?php
                }
            }
	    ?>		
	}
	</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMNq3nuw5whsc1fdAbwX4bHWMLgCt4C6E&callback=initMap"
    async defer></script>
  </body>
</html>