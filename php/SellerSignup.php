<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<title>Signup</title>
<script type="text/javascript">
  function initAutocomplete() {
    autocomplete = new google.maps.places.Autocomplete(
     (document.getElementById('location')),
        {types: ['geocode']});
    autocomplete.addListener('place_changed', fillInAddress);
  }

  function fillInAddress() {
    var place = autocomplete.getPlace();

  }
 </script>
</head>
<body> 
 <div class="header">
 <p>Digital Kisaan</p>
 <ul>
  <li>Home</li>
  <li>About</li>
  <li>Contact</li>
  <li ><a href="file:///C:/Users/JC/AppData/Local/Temp/Rar$EX43.280/Weather-App-master/forecast.html">Weather</a></li>
 </div>
 <div class="Signup" style="margin-left: 25%;margin-top: 5%;">
     <table cellspacing="5px" cellpadding="5px" align="center">
<tr >
<td colspan="2">
<p align="center">Wholesaler SignUp</p>
</td>

<tr>
<td>
<input type="text" placeholder="Create username*">
</td>
<td>
<input type="text" placeholder="Mobile Number*">
</td>

<tr>
<td>
<input type="password" placeholder="Enter password*">
</td>
<td>
<input type="text" placeholder="Aadhar Number*">
</td>

<tr>
<td>
<input type="password" placeholder="Confirm password*">
</td>
<td>
<input type="text" placeholder="Ration Number*">
</td>

<tr>
<td>
<input type="email" placeholder="Enter your email*">
</td>
<td>
<input type="text" id="location" placeholder="City/District*">
</td>

<tr>
<td>
<input type="Radio" name="sex">  Male<input type="Radio" name="sex">  Female
</td>
<td>Date of birth* - <input type="date"></td>

</table>

     <input  type="submit" value="SignUp">
     <div id="terms"><br>By signing up, you agree to the <a href="#">Terms</a> of Service and <a href="#">Privacy Policy.</a></div>  
   <div class="footr">
     <p>Already have account ? Click <a href="./login.php">here</a> to login</p>    
  </div>
 </div>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeMQgP036S3bA1yPmzGABcVN-COuYIHLc&libraries=places&callback=initAutocomplete" async defer></script>
</body>
</html>