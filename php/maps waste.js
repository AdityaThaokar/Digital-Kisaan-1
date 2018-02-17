	var usrlat;var usrlng;
		geocode();

		function initMap() {

        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: uluru
        });
       
        addMarker({lat: -25.363, lng: 131.044});
        var infoWindow = new google.maps.InfoWindow({
        	content: '<h4> User: <?php echo $_SESSION["username"]; ?></h4>'
        });

       
     
        	function addMarker(coords){
      		 var marker = new google.maps.Marker({
         	 position: coords,
          	 map: map,
        	});
      		  marker.addListener('click',function(){
        	infoWindow.open(map,marker);
       		 });
      	}
 }

		function geocode(){
			var location='<?php echo $_SESSION["location"]; ?>';
			axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
				params:{
					address:location,
					key:'AIzaSyDuGoB4REGcdMqyULV0g_8IP-lHvKAQ7mE'
				}
			})
			.then(function(response){
				console.log(response);

				 faddress= response.data.results[0].formatted_address;
				usrlat=parseFloat(response.data.results[0].geometry.location.lat);
				usrlng=parseFloat(response.data.results[0].geometry.location.lng);
				var addressOutpur = `
				<ul class="list-group">
				<li class="list-group-item"><b>Your Location:</b>&nbsp${faddress}</li>
				</ul>
				`;
				document.getElementById('f-address').innerHTML=addressOutpur;
			})
			.catch(function(error){
				console.log(response);
			});
		}
			
		