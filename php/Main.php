<?php 

include('server.php');
if(isset($_SESSION['email'])){
	$username = $_SESSION['username'];
	$location = $_SESSION['location'];
}
else {
    header('Location: login.php');
   die();
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/search.css">
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<title>Digital Kisaan</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.2/jquery.flexslider.js"></script>
<script language="JavaScript">
$('.flexslider').each(function() {
    var sliderSettings =  {
      animation: $(this).attr('data-transition'),
      selector: ".slides > .slide",
      controlNav: false,
      smoothHeight: true,
      prevText: "",
      nextText: "",
      sync: $(this).data('slidernav') || '',
      start: function(slider) {
        if (slider.find('[data-slide-bg-stretch=true]').length > 0) {
          slider.find('[data-slide-bg-stretch=true]').each(function() {
            if ($(this).data('slide-bg')) {
              $(this).backstretch($(this).data('slide-bg'));
              // $(this).data('slide-bg');
            }
          });
        }
      }
    };
      
    $('html').addClass('has-flexslider');
    $(this).flexslider(sliderSettings);
  });
  $(window).delay(1000).trigger('resize'); //make sure height is right load assets loaded
}})
</script>

</head>
<body style="background:#e0e1e2;"> 
<div class="header" style="height:80px;box-shadow: 1px 2px 4px 0px #4e4e4f;">
 <p><img src="../images/kisaanlogo.png" width="40px" >Digital Kisaan
 <input type="text" placeholder="Search" >
 <input type="submit" value="Search">
 </p>
 <ul style="margin-left:900px;"> 
   <li><a href="logout.php">Log out</a></li>
   <li><a href="index.php">Home</a></li>
  <li><a href="About.php">About</a></li>
   <li><a href="contact.php">Contact</a></li>
  <li><a href="current.php">Weather</a></li></div> 
 <marquee behavior=scroll direction="left" scrollamount="5" style="position:relative;background:#e9f6f9">Flat 10% on purchase more than 5500 Rs.
Buy Any products, If your cart value is more than 5500 Rs ,
you can avail a discount of 10% on your cart value.</marquee>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="bg"><div id="google_translate_element" style="margin-left:1170px;"></div>
  
 </div> 
 <div class="store" style="background:#e0e1e2;">
 		 <br>
    <div class="containr" >
        <ul> 
        <li><div class="butn">
		<a href="#">Seeds</a>
		<div class="dd">
		<a href="">Ajinkya Seeds</a>
		<a href="">Ankur Seeds </a>
		<a href="">Balaji Seed</a>
		<a href="">Bhadra Hybrid Seeds Co</a>
		<a href="">Burdwan Seed Production Co-op.Society Ltd.</a>
		</div>
		</div>
		</li>
         <li><div class="butn">
		<a href="#">Pesticides</a>
		<div class="dd">
		<a href="">Sulphur (fungicide)</a>
		<a href="">Endosulfan (insecticide)</a>
		<a href="">Mancozeb (fungicide)</a>
		<a href="">Cypermethrin (insecticide)</a>
		<a href="">Copper oxychloride</a>
		<a href="">Chlorpyrifos (insecticide)</a>
		<a href="">Carbendazim (fungicide)</a>
		<a href="">Dichlorvos (insecticide)</a>
		</div>
		</div></li>
         <li><div class="butn">
		<a href="#">Micronutrients</a>
		<div class="dd">
		<a href="">Individual Micronutrients</a>
		<a href="">Micronutrient Mixture</a>
		<a href="">Micronutrients Spray</a>
		</div>
		</div></li>
         <li><div class="butn">
		<a href="#">Fertlizers</a>
		<div class="dd">
		<a href="">Waterbsoluble fertilizers</a>
		<a href="">Secondary Fertilizers</a>
		</div>
		</div></li>
         <li ><div class="butn">
		<a href="#">Organic products</a>
		<div class="dd">
		<a href="">Organic couted granuels</a>
		<a href="">Organic neem product</a>
		<a href="">Organic PGR technical product</a>
		<a href="">Organic Premium PGR product</a>
		<a href="">Organic Stimulant</a>
		</div>
		</div></li>
		 <li><a href="#" onMouseOver="this.style.color='#1eaa83'" onMouseOut="this.style.color='#FFFFFF'"style="background:none;border-radius:2px;border:none;height:22px;margin-left:180px;">
		 <img src="../images/cart.png" width="20" style="border-radius:30%;"/>&nbsp;My cart(0)</a></li>
		 <li ><a onMouseOver="this.style.color='#1eaa83'" onMouseOut="this.style.color='#FFFFFF'"href="#"style="background:none;border-radius:2px;border:none;height:22px;"><img src="../images/Wprofile.jpg" width="20" style="border-radius:30%;"/>&nbsp;Account</a></li>
    </div>
	 <div class="frames" style="background:#f4f5f7;border-style:solid;border-width:1px;border-color:#e5e5e5;">
	 <div class="left" style="background:#e8e9ea;border-style:solid;border-width:1px;border-color:#edf2f4">
	 
	 <div class="prices" style="background:#e8e9ea;">
	 <h4><font color="#6a6c6d"><b>Current Market Prices</b></font></h4>
	 <p style="color:black;">
	 Amaranth leaves:₹ 13Kg / Pcs<br>
	 Ash gourd:₹ 10Kg / Pcs<br>
	 Banana flower:₹ 20Kg / Pcs<br>
	 Beetroot:₹ 29Kg / Pcs<br>
	 Bitter gourd:₹ 80Kg / Pcs<br>
	 Bell Pepper :₹ 33Kg / Pcs<br>
	 Bottlegourd:₹ 23Kg / Pcs<br>
	 Cabbage:₹ 44Kg / Pcs<br>
	Carrot:₹ 11Kg / Pcs<br></p>
	 </div>
	 </div>
 <div class="right" style="background:white;border-style:solid;border-width:1px;border-color:#e5e5e5;">
    <table style="clear: both; border-collapse: collapse; border-spacing: 0; width: 100%;" >
	<tr>
	<td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Brown_Flax_Seeds.jpg/1200px-Brown_Flax_Seeds.jpg" width="300px"><p>Name<br>Price:<br><input type="button" value="Add to cart" ><input type="button" value="Buy now" ></td>
	<td><img src="https://zapmill.com/content/uploads/2016/07/cache/food-4509_1920_best_fit-600x600.jpg" width="300px"><p>Name<br>Price:<br><input type="button" value="Add to cart" ><input type="button" value="Buy now" ></td>
	<td><img src="http://www.chabad.org/media/images/79813.jpg" width="300px"><p>Name<br>Price:<br><input type="button" value="Add to cart" ><input type="button" value="Buy now" ></td>
	<tr>
	<td><img src="https://content.indiainfoline.com/_media/iifl/img/misc/2015-04/20/full/rcf-rashtriya-chemicals-fertilizers-1429520783-8383300.jpg" width="300px"><p>Name<br>Price:<br><input type="button" value="Add to cart" ><input type="button" value="Buy now" ></td>
	<td><img src="http://roccofischettinursery.com/images/Items/fertilizer.JPG" width="300px"><p>Name<br>Price:<br><input type="button" value="Add to cart" ><input type="button" value="Buy now" ></td>
	<td><img src="http://knnindia.co.in/uploads/newsfiles/Fertilizers-1-7-17.png" width="300px"><p>Name<br>Price:<br><input type="button" value="Add to cart" ><input type="button" value="Buy now" ></td>
	<tr>
	<td><img src="http://bycgroup.com/images/product_catalog/pictures/Bayer%20Pesticide%20Bottle%20100ml%20250ml%20500ml_3.JPG" width="300px"><p>Name<br>Price:<br><input type="button" value="Add to cart" ><input type="button" value="Buy now" ></td>
	<td><img src="https://cdn.sribu.com/assets/media/contest_detail/2012/11/label-for-pesticides-50b5876c3c0aa1703d000148/bf4252290f.jpg" width="300px"><p>Name<br>Price:<br><input type="button" value="Add to cart" ><input type="button" value="Buy now" ></td>
	<td><img src="http://www.twentyfournews.com/wp-content/uploads/2016/06/image2.png" width="300px"><p>Name<br>Price:<br><input type="button" value="Add to cart" ><input type="button" value="Buy now" ></td>
	</table>
 </div> 
 </div>
<div class="Contact1" id="contact">
<p>
<img src="../images/toll.png" width="30px">Toll Free 1800-274-3131
<img src="../images/email.png" width="30px">DigitalKisaan@service.com
<img src="../images/franchize.png" width="30px">Franchise
<br></p>
<h4>Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</div>
</div>
</html>