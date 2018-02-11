<?php 
include('server.php');
?>
<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather Forecast</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
    <link rel="stylesheet" href="style.css"> 
    <script type="text/javascript" src="autocomplete.js"></script>  
</head>
<body>
<div class="jumbotron" style="margin-bottom:0px; background-color:#1eaa83; color:white;">
    <h2 class="text-center" style="font-size:40px; font-weight:600;">Get Current Weather Information</h2>
</div>

<div class="container" style="height:650px;">
    <div class="row" >
        <div class="col-md-12" style="margin-bottom:10px;">
            <h3 class="text-center text-primary" style="color:#0a7f5e;">Enter City Name</h3>
            <span id="error" class="text-center"></span>
        </div>
        
        <div class="row form-group form-inline" id="cityDiv">
           
            <input type="text" name="city" id="city" class="form-control" value='<?php echo(htmlspecialchars($_SESSION["location"], ENT_QUOTES)); ?>' >
            <button id="submitCity" class="btn btn-primary" style="background-color:#1eaa83;border-color:#1eaa83;">Click me</button>
        </div>

    </div>
    <div id="showWeather" style="background-color: #1eaa83"></div>
</div>

<div class="footer" style="background-color:#1eaa83;">
    <div class="container">
        <div class="row text-center" id="location" style="padding-top:30px;background-color:#1eaa83;">
            <p style="color:white; background-color:#1eaa83;">Digital Kisan</p>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>        
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>   
<script src="weather.js"></script>   
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeMQgP036S3bA1yPmzGABcVN-COuYIHLc&libraries=places&callback=initAutocomplete" async defer></script>
</body>
</html>