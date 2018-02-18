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
      height: 70%;
    }
   html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body onload="initMap()"  >
  	<?php

  	$result = "SELECT location FROM salerdetails";
  	$sel=mysqli_query($connect,$result) or die(mysql_error()); 
	$storeArray = Array();
	while ($row = mysqli_fetch_array($sel)) {
    $storeArray[] =  $row['location'];  
	}
	echo '<div class="card-block" align="center" style="font-size:20px;"><b>Your Location:</b> '.$_SESSION['location'].'</div>';
  	?>
	
    <div id="map" class="card-block" style="margin:0% 5%;"></div>
     <div class="card-block" ><br><center>
          <input type="button" style="font-size:15px;" value="Your Location" onclick="codeAddress()" class="btn btn-success">
          <input type="button" style="font-size:15px;"value="Show nearby shops" onclick="showshop()" class="btn btn-success">
          <input type="button" style="font-size:15px;"value="Back" class="btn btn-danger" onclick="location='main.php'">
        </div>
		<br>
	 
    <script>
      var map;
	var geocoder;		
	function initMap() {
		var mapLayer = document.getElementById("map");
		var centerCoordinates = new google.maps.LatLng(19.0952,74.7496);
		var defaultOptions = { center: centerCoordinates, zoom: 8 }

		map = new google.maps.Map(mapLayer, defaultOptions);
		geocoder = new google.maps.Geocoder();

      google.maps.event.addEventListener(map, "load", function(){
        google.maps.event.trigger(map, 'resize'); 
        map.setZoom( map.getZoom() );
    });
		
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