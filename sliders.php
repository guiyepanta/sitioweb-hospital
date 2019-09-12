<!DOCTYPE html>
<!-- saved from url=(0060)sliders.html -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- Basic Page Needs
  ================================================== -->

	<title>AquaTheme</title>
	<meta name="description" content="AquaTheme - HTML Template">
	<meta name="author" content="Blueowlcreative.com">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="assets/css/skeleton.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- <link href="assets/css/css" rel="stylesheet" type="text/css">	 -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600" rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" media="screen" href="stylesheets/sequencejs-theme.sliding-horizontal-parallax-ie.css" /><![endif]-->

	<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="assets/css/carousel.css" type="text/css" media="screen">

	<!-- JS
  ================================================== -->
	<script type="text/javascript" src="assets/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="assets/js/common.js"></script>


	<script type="text/javascript" src="assets/js/sequence.jquery-min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.quicksand.js"></script>

	<script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="assets/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.tipsy.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<!-- <link href="assets/css/css" rel="stylesheet" type="text/css">	 -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600" rel='stylesheet' type='text/css'>

<style>.sequence-preloader{height: 100%;position: absolute;width: 100%;z-index: 999999;}@keyframes preload{0%{opacity: 1;}50%{opacity: 0;}100%{opacity: 1;}}.sequence-preloader .preloading .circle{fill: #ff9442;display: inline-block;height: 12px;position: relative;top: -50%;width: 12px;animation: preload 1s infinite; animation: preload 1s infinite;}.preloading{display:block;height: 12px;margin: 0 auto;top: 50%;margin-top:-6px;position: relative;width: 48px;}.sequence-preloader .preloading .circle:nth-child(2){animation-delay: .15s; animation-delay: .15s;}.sequence-preloader .preloading .circle:nth-child(3){animation-delay: .3s; animation-delay: .3s;}.preloading-complete{opacity: 0;visibility: hidden;transition-duration: 1s; transition-duration: 1s;}div.inline{background-color: #ff9442; margin-right: 4px; float: left;}</style></head>
<body>
  <div id="wrapper">

	<div class="container">

		<?php include ("incluidos/header_top.php"); ?>


		<!-- Main Navigation -->
				<?php  include ("incluidos/ind_menu.php") ?>
		<!-- Main Navigation::END -->



		<div class="row">
			<div class="sixteen columns clearfix">
				<div class="breadcrumb">
			        <a href="index.html" class="first_bc"><span>Home</span></a>
			        <a href="sliders.html" class="last_bc"><span>Sliders</span></a>
			    </div>

				<div class="page_heading"><h1>Sliders &amp; Carousels</h1></div>
			</div>
		</div>

		<!-- Sequence Slider -->
		<script type="text/javascript">
			$(document).ready(function(){
				var options = {
					autoPlay: true,
					autoPlayDelay: 5000,
					nextButton: true,
					prevButton: true,
					preloader: true,
					animateStartingFrameIn: true,
					transitionThreshold: 500,
					fallback: {
			        	theme: "slide",
			        	speed: 500
			        }
				};

				var sequence = $("#sequence").sequence(options).data("sequence");

				sequence.afterLoaded = function(){
					$(".info").css('display','block');
					$("#sequence").hover(
					        function() {
					        	$(".prev, .next").stop().animate({opacity:0.7},300);
					        },
					        function() {
					        	$(".prev, .next").stop().animate({opacity:0},300);
					        }
					);

					$(".prev, .next").hover(
					        function() {
					        	$(this).stop().animate({opacity:1},200);
					        },
					        function() {
					        	$(this).stop().animate({opacity:0.7},200);
					        }
					);
				}
			})
		</script>

		<div class="row no_bm">
			<div class="sixteen columns clearfix">
				<h2 class="title"><span>Sequence Slider</span></h2>
			</div>
		</div>

		<div class="row">
			<div id="slider_holder" class="sixteen columns padded_block clearfix">

				<div id="sequence">
					<div class="prev" style="opacity: 0;"><span></span></div>
					<div class="next" style="opacity: 0;"><span></span></div>

					<ul style="width: 100%; height: 100%; position: relative;">
						<!-- Layer 1 -->
						<li class="" style="display: list-item; width: 100%; height: 100%; position: absolute; z-index: 1;">
							<div class="info animate-out" style="display: block;">
								<h2>Clean Design</h2>
								<h3>Clear Message</h3>
								<p>Imperfection is beauty, madness is genius and it's better to be absolutely ridiculous than absolutely boring</p>
							</div>
							<img class="slider_bgr animate-out" src="images/1.jpg" style="">
							<img class="slider_img animate-out" src="images/1_1.png" style="">
						</li>

						<!-- Layer 2 -->
						<li class="current-frame" style="display: list-item; width: 100%; height: 100%; position: absolute; z-index: 3;">
							<div class="info animate-in" style="display: block;">
								<h2>Slick &amp; Smart</h2>
								<h3>Rich Admin Options</h3>
								<p>Fantasy is a necessary ingredient in living! Imagination is more important than knowledge. Knowledge is limited.</p>
							</div>
							<img class="slider_bgr animate-in" src="images/2.jpg" alt="Blue Sky" style="">
							<img class="slider_img animate-in" src="images/2_2.png" style="">
						</li>

						<!-- Layer 3 -->
						<li style="display: list-item; width: 100%; height: 100%; position: absolute;">
							<div class="info" style="transition-duration: 0s; transition-delay: 0s; display: block;">
								<h2>White ain't bad</h2>
								<h3>Fully Customizable</h3>
								<p>Fantasy is a necessary ingredient in living! Imagination is more important than knowledge. Knowledge is limited.</p>
							</div>
							<img class="slider_img" src="images/3.jpg" style="transition-duration: 0s; transition-delay: 0s;">
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Sequence Slider::END-->




		<div class="row padded_block portfolio_page">

			<!-- FlexSlider -->
			<div class="flexslider ten columns">

		      <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-1740px, 0px, 0px);"><li class="pic clone" style="width: 580px; float: left; display: block;">
		          	<a href="images/5_big.jpg" rel="prettyPhoto[portfolio]" title="Custom Web Development">
		          		<img src="images/portfolio_img1.jpg"><span class="img_overlay_zoom"></span>
		          	</a>
		          </li>
		          <li class="pic" style="width: 580px; float: left; display: block;">
		          	<a href="images/9_big.jpg" rel="prettyPhoto[portfolio]" title="Custom Web Development">
		          		<img src="images/portfolio_img3.jpg"><span class="img_overlay_zoom"></span>
		          	</a>
		          </li>
		          <li class="pic" style="width: 580px; float: left; display: block;">
		          	<a href="images/4_big.jpg" rel="prettyPhoto[portfolio]" title="Custom Web Development">
		          		<img src="images/portfolio_img2.jpg"><span class="img_overlay_zoom"></span>
		          	</a>
		          </li>
		          <li class="pic flex-active-slide" style="width: 580px; float: left; display: block;">
		          	<a href="images/5_big.jpg" rel="prettyPhoto[portfolio]" title="Custom Web Development">
		          		<img src="images/portfolio_img1.jpg"><span class="img_overlay_zoom"></span>
		          	</a>
		          </li>
		        <li class="pic clone" style="width: 580px; float: left; display: block;">
		          	<a href="images/9_big.jpg" rel="prettyPhoto[portfolio]" title="Custom Web Development">
		          		<img src="images/portfolio_img3.jpg"><span class="img_overlay_zoom"></span>
		          	</a>
		          </li></ul>
		      </div>
		      	<ul class="flex-direction-nav">
					<li>
						<a class="flex-prev" href="sliders.html#">Previous</a>
					</li>
					<li>
						<a class="flex-next" href="sliders.html#">Next</a>
					</li>
				</ul>
		  	  </div>

				<script type="text/javascript" charset="utf-8">
					$(document).ready(function(){
						$(".pic a[rel^='prettyPhoto']").prettyPhoto({
							animation_speed:'normal',
							overlay_gallery: false,
							social_tools: false
						});
					});
				</script>

				<script type="text/javascript">
				  $(window).load(function(){
				    $('.flexslider').flexslider({
				      animation: "slide",
				      controlNav: false,
				      start: function(slider){
				        $('body').removeClass('loading');
				      }
				    });
				  });
				</script>
				<!-- FlexSlider -->


				<div class="five columns services_description">
					<h3>FlexSlider</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed metus gravida est viverra molestie non vitae nisi. Ut porta lacinia lacus at faucibus.</p>
					<p>Fusce justo lectus, lacinia tristique luctus ut, tempor a eros. Aliquam in turpis tortor, in sagittis augue.</p>

					<h5>Description</h5>

					<ul class="checked">
						<li>Custom Web Design</li>
						<li>HTML/CSS</li>
						<li>Web Development</li>
						<li>Bespoke Programming</li>
					</ul>
					<div class="h20"></div>
					<p><a href="http://www.blueowlcreative.com/" target="_blank" class="button sm_button button_hilite">Visit Website</a></p>
				</div>

		</div>



		<!-- Portfolio Items Section-->
		<div class="row">

			<h2 class="title sixteen columns"><span>JCarousel</span></h2>
			<div class="clear"></div>

			<div class="half_padded_block carousel_section">
				<div class="carousel_arrows_bgr"></div>
				<div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;"><div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;"><ul id="portfolio_carousel" class="jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 1680px;">
					<li class="four columns portfolio_item jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none; width: 220px;">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_2.jpg"><div class="img_overlay"></div></span>
					  		<h5>Custom Design</h5>
					  	</a>
					</li>
					<li class="four columns portfolio_item jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal" jcarouselindex="2" style="float: left; list-style: none; width: 220px;">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_3.jpg"><div class="img_overlay"></div></span>
					  		<h5>Bespoke Business Solution</h5>
					  	</a>
					</li>
					<li class="four columns portfolio_item jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal" jcarouselindex="3" style="float: left; list-style: none; width: 220px;">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_4.jpg"><div class="img_overlay"></div></span>
					  		<h5>Custom Design</h5>
					  	</a>
					</li>
					<li class="four columns portfolio_item jcarousel-item jcarousel-item-horizontal jcarousel-item-4 jcarousel-item-4-horizontal" jcarouselindex="4" style="float: left; list-style: none; width: 220px;">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_5.jpg"><div class="img_overlay"></div></span>
					  		<h5>Custom Plugin Development</h5>
					  	</a>
					</li>
					<li class="four columns portfolio_item jcarousel-item jcarousel-item-horizontal jcarousel-item-5 jcarousel-item-5-horizontal" jcarouselindex="5" style="float: left; list-style: none; width: 220px;">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_6.jpg"><div class="img_overlay"></div></span>
					  		<h5>Website Redesign</h5>
					  	</a>
					</li>
					<li class="four columns portfolio_item jcarousel-item jcarousel-item-horizontal jcarousel-item-6 jcarousel-item-6-horizontal" jcarouselindex="6" style="float: left; list-style: none; width: 220px;">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_7.jpg"><div class="img_overlay"></div></span>
					  		<h5>Online Store Design</h5>
					  	</a>
					</li>
					<li class="four columns portfolio_item jcarousel-item jcarousel-item-horizontal jcarousel-item-7 jcarousel-item-7-horizontal" jcarouselindex="7" style="float: left; list-style: none; width: 220px;">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_8.jpg"><div class="img_overlay"></div></span>
					  		<h5>Template Design</h5>
					  	</a>
					</li>
				</ul></div><div class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal" disabled="disabled" style="display: block;"></div><div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div></div>
			</div>
		</div>

		<script type="text/javascript">
			jQuery(document).ready(function() {
			    jQuery('#portfolio_carousel').jcarousel({
			    	scroll: ($(window).width() > 767 ? 4 : 1),
			    	easing: 'easeInOutExpo',
			    	animation: 600
			    });
			});

			// Reload carousels on window resize to scroll only 1 item if viewport is small
		    $(window).resize(function() {
		    	 var el = $("#portfolio_carousel"), carousel = el.data('jcarousel'), win_width = $(window).width();
		    	   var visibleItems = (win_width > 767 ? 4 : 1);
		    	   carousel.options.visible = visibleItems;
		    	   carousel.options.scroll = visibleItems;
		    	   carousel.reload();
		    });
		</script>
		<!-- Portfolio Items Section::END -->




	</div>


	<!-- Footer -->
	<div id="footer" class="container">
		<div class="row footer_inside">
		  <div class="four columns">
		    <h3>About Us</h3>
		    <p>Twenty years from now you will be more disappointed by the things that you didn't do than by the ones you did do. So throw off the bowlines. Sail away from the safe harbor. Catch the trade winds. Explore. Dream. Discover.</p>
		  </div>
		  <div class="four columns">
		    <h3 class="margined_left">Footer Navigation</h3>
		    <ul class="margined_left">
		    	<li><a href="sliders.html">Home</a></li>
		    	<li><a href="sliders.html">Our Services</a></li>
		    	<li><a href="sliders.html">Recent Work</a></li>
		    	<li><a href="sliders.html">Our Blog</a></li>
		    	<li><a href="sliders.html">About Us</a></li>
		    	<li><a href="sliders.html">Contact Us</a></li>
		    </ul>
		  </div>
		  <div class="four columns">
		    <h3>Latest News</h3>
			<div class="footer_news_item clearfix">
				<div class="footer_pic">
					<a href="sliders.html"><img src="images/footer_th1.jpg"></a>
				</div>
				<h4><a href="sliders.html">Those who mind don't matter, and vice-versa.</a></h4>
				<p class="date">8 Sept., 2012</p>
			</div>
			<div class="footer_news_item clearfix">
				<div class="footer_pic">
					<a href="sliders.html"><img src="images/footer_th2.jpg"></a>
				</div>
				<h4><a href="sliders.html">Be yourself; everyone else is already taken.</a></h4>
				<p class="date">2 Sept., 2012</p>
			</div>
		  </div>

		  <div class="four columns">
		  	<h3>Get in Touch with Us</h3>
		  	<div class="icon_phone" title="Phone">(792) 567 8745</div>
		    <div class="icon_mail" title="Email">contact@aquacart.com</div>
		    <div class="icon_loc" title="Location">3451 52nd Ave., New York City</div>

		  	<div class="clear"></div>
		  	<div class="h10"></div>

		  </div>
	  </div>
	  <div class="clear"></div>
	  <div class="footer_btm">
	  	<div class="footer_btm_inner">
		  	<a href="https://www.pinterest.com/" target="_blank" class="icon_pinterest" title="Pinterest">Pinterest</a>
	      	<a href="https://www.twitter.com/" target="_blank" class="icon_tweet" title="Tweeter">Tweeter</a>


			<a href="https://www.skype.com/" class="icon_skype" title="Skype">Skype</a>




		  	<a href="https://www.google.com/" target="_blank" class="icon_google" title="Google+">Google+</a>
	      	<a href="https://www.facebook.com/" target="_blank" class="icon_facebook" title="Facebook">Facebook</a>


		  	<div id="powered"><a href="https://themeforest.net/user/blueowlcreative/portfolio?ref=blueowlcreative" target="_blank">AquaCart Theme</a> © 2012 &nbsp; | &nbsp; <a href="http://www.blueowlcreative.com/" target="_blank">BlueOwlCreative</a></div>
		</div>
	  </div>
	</div>
	<!-- Footer::END -->


  </div>


</body></html>
