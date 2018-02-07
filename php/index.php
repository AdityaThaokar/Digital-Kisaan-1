<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<title>Lets Start</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.2/flexslider.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.2/jquery.flexslider.js"></script>
<script language="JavaScript">
$(document).ready(function (){
  if (jQuery().flexslider) {
  //flexslider ticker
  $('.flexslider-ticker').each(function() {
    var tickerSettings =  {
      animation: "slide",
      animationLoop: false,
      selector: ".items > .item",
      move: 1,
      controlNav: false,
      slideshow: true,
      direction: 'vertical'
    };
    $(this).flexslider(tickerSettings);
  });
  // flexsliders
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
<body> 
 <div class="header">
 <p>Digital Kisaan</p>
 <ul>
  <li>Home</li>
  <li>About</li>
  <li>Contact</li>
  <li ><a href="file:///C:/Users/JC/AppData/Local/Temp/Rar$EX43.280/Weather-App-master/forecast.html">Weather</a></li>
 </div>
<div class="Start">
<h2>WELCOME</h2>
<p>" We, at DigitalKisaan.com, are excited about making life simpler and grocery shopping a 
breeze! Now you can buy organic food & grocery online at your leisure and from the comfort 
of your home - no more standing in the long queues at ration shops, provision stores & supermarkets." 
</p>
<br>
<a href="./login.php">
<input type="submit" value="Buy here"></a>
</div> 
<div class="slider">
<!-- @zone - hightlighted -->
<!--Showshow-->
<div class="container slider-container">
   <div class="row">
      <div class="col-md-12 slider-left">
         <section class="flexslider-wrapper">
            <div id="main-slider" class="flexslider" data-transition="fade" data-page-class="slider-full-width">
               <div class="slides">
                  <div data-slide-alt="alt" data-slide-bg-stretch=true class="slide slide-bg" data-slide-bg="https://superfoodsrx.com/wp-content/uploads/2016/09/Diverticular-Disease-Nuts-Seeds-1.jpg">
                     <div class="slide-caption">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slide-text">
                                 <div class="slide-title">This is Slide #1</div>
                                 This is text for the first slide.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div data-slide-alt="alt" data-slide-bg-stretch=true class="slide slide-bg" data-slide-bg="https://countercurrents.org/wp-content/uploads/2017/10/seeds.jpg">
                     <div class="slide-caption">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slide-text">
                                 <div class="slide-title">This is Slide #2</div>
                                 This is text for the second slide.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div data-slide-alt="alt" data-slide-bg-stretch=true class="slide slide-bg" data-slide-bg="https://img.aws.livestrongcdn.com/ls-article-image-673/ds-photo/getty/article/190/129/105661091.jpg">
                     <div class="slide-caption">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slide-text">
                                 <div class="slide-title">This is Slide #3</div>
                                 This is text for the third slide.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         </section>
         </div>
      </div>
   </div>
</div>

<div class="about">

</div>
</html>