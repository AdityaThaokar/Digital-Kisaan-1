<?php
include ('translate.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Add Item
		</title>
		<link type="text/css" rel="stylesheet" href="css/auction.css">
        <script type="text/javascript" src="autocomplete.js"></script>
	</head>
	<body>
	<h2 align="center">Details Of Item to be sold</h2>
	<form id="form" action="uploadaction.php" method="post" enctype="multipart/form-data" >
		 <div><table align="center">
                        <tr>
                            <td align="right"><label for="cname">Input Name</label></td><td>:</td>
                            <td><input type="radio" id="cname" name="cname" value="Fertilizers">Fertilizers
                          <input type="radio" id="cname" name="cname" value="Pesticides">Pesticides
                            <input type="radio" id="cname" name="cname" value="Vegetative Plating Material">Vegetative Plating Material
                            <input type="radio" id="cname" name="cname" value="Bio Pesticides">Bio Pesticides
                            <input type="radio" id="cname" name="cname" value="Animal Feeds">Animal Feeds
                            <input type="radio" id="cname" name="cname" value="Poultry Feeds">Poultry Feeds
                            <input type="radio" id="cname" name="cname" value="Bio Control Agents">Bio Control Agents
                        </td>
                        </tr>     
                       <tr>
                                <td align="right"><label for="description">Description</label></td><td>:</td>
                                <td><textarea id="description" name="description" rows="3" cols="50">
                                </textarea></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="sprice">Start Price( per kg )</label></td><td>:</td>
                            <td><input type="text" id="sprice" name="sprice" required></td>
                        </tr> 
                        <tr>
                            <td align="right"><label for="quantity">Quantity( in kgs )</label></td><td>:</td>
                            <td><input type="text" id="quantity" name="quantity" required></td>
                        </tr> 
                        <tr>
                            <td align="right"><label for="mdate">Manufacturing Date</label></td><td>:</td>
                            <td><input type="date" id="mdate" name="mdate"  value="<?php echo date('Y-m-d'); ?>" required></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="enddate">Expiry Date</label></td><td>:</td>
                            <td><input type="date" id="edate" name="edate"  value="<?php echo date('Y-m-d'); ?>" required></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="image">Input Picture</label></td><td>:</td>
                            <td><input type="file" id="files" name="files" ></td> 
                        </tr>
                        <tr>
                            <td align="right">Image Preview</td><td>:</td>
						    <td> <img id="image" src="#" alt="image" height="100px"/></td>
							<script>
							document.getElementById("files").onchange = function () {
						    var reader = new FileReader();

						    reader.onload = function (e) {
						        // get loaded data and render thumbnail.
						        document.getElementById("image").src = e.target.result;
						    };

						    // read the image file as a data URL.
						    reader.readAsDataURL(this.files[0]);
						};
						</script>
                            <!-- Lil Javascript for showing image -->
                        </tr>
                        <tr>
                            <td align="right"><label for="currency">Currency</label></td><td>:</td>
                        	<td><select id="currency" name="currency">
                        	<option value="Dollars">$ Dollars</option>
                        	<option value=:DOllars>Rupees</option>
                        	</select></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="country">Country</label></td><td>:</td>
                        	<td><select id="country" name="country">
                        	<option value="India">India</option>
                        	<option value="USA">USA</option>
                        	</select></td>
                        </tr>
                        <tr>
                                <td align="right"><label for="address">Address</label></td><td>:</td>
                                <td><input type="text" id="location" name="location"></td>
                            </tr>
                        <tr>
                            <td align="right"><label for="payoptions">Payment Options</label></td><td>:</td>
                            <td><input type="radio" id="payoptions" name="payoptions">Payment On Delivery 
                            <input type="radio" id="payoptions" name="payoptions" >Credit Card
                            <input type="radio" id="payoptions" name="payoptions" >Debit Card
                            <input type="radio" id="payoptions" name="payoptions" >Net Bamking</td>
                        </tr>
                        <tr>
                                <td><label for="contact">Method to contact you</label></td><td>:</td>
                                <td><input type="checkbox" id="contact" name="contact" >Email 
                                <input type="checkbox" id="contact" name="contact" >Whatsapp
                                    <input type="checkbox" id="contact" name="contact" >In-app chat</td>
                            </tr>  
                     </table>
                </div>   <br><br>
                <center><input type="submit" value="Submit" name="submit" id="submit" ></center>
        </form>
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeMQgP036S3bA1yPmzGABcVN-COuYIHLc&libraries=places&callback=initAutocomplete" async defer></script>
	</body>

</html>