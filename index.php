
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
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

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600" rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" media="screen" href="assets/css/sequencejs-theme.sliding-horizontal-parallax-ie.css" /><![endif]-->

	<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="assets/css/carousel.css" type="text/css" media="screen" />

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
	<link rel="shortcut icon" href="images/icono-hospital.png">

</head>
<body>
  <div id="wrapper">

	<div class="container">

<?php
include("incluidos/header_top.php");
?>

		<!-- Main Navigation -->
	<?php include("incluidos/ind_menu.php");?>
		<!-- Main Navigation::END -->


		<!-- Sequence Slider -->
		<div class="h15 clear"></div>
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
			<div id="slider_holder" class="sixteen columns">
				<div id="sequence">
					<div class="prev" ><span></span></div>
					<div class="next" ><span></span></div>

					<ul>
						<!-- Layer 1 -->
						<li>
							<div class="info animate-in">
								<h2>Clean Design</h2>
								<h3>Clear Message</h3>
								<p>Imperfection is beauty, madness is genius and it's better to be absolutely ridiculous than absolutely boring</p>
								<p><a class="link" href="services.html">View Services &raquo;</a>
							</div>
							<img class="slider_bgr animate-in" src="images/1.jpg"/>
							<img class="slider_img animate-in" src="images/1_1.png"/>
						</li>

						<!-- Layer 2 -->
						<li>
							<div class="info">
								<h2>Slick & Smart</h2>
								<h3>Rich Admin Options</h3>
								<p>Fantasy is a necessary ingredient in living! Imagination is more important than knowledge. Knowledge is limited.</p>
								<p><a class="link" href="portfolio.html">View Portfolio &raquo;</a>
							</div>
							<img class="slider_bgr" src="images/2.jpg"/>
							<img class="slider_img" src="images/2_2.png"/>
						</li>

						<!-- Layer 3 -->
						<li>
							<div class="info">
								<h2>White ain't bad</h2>
								<h3>Fully Customizable</h3>
								<p>Fantasy is a necessary ingredient in living! Imagination is more important than knowledge. Knowledge is limited.</p>
								<p><a class="link" href="blog.html">Read Our Blog &raquo;</a>
							</div>
							<img class="slider_img" src="images/3.jpg"/>
						</li>
					</ul>
				</div>
			</div>
			<!-- Sequence Slider::END-->
		</div>



		<!-- Big Title Section -->
		<div class="row no_bm">
			<div class="section_big_title sixteen columns">
				<div class="h10 divider_bgr"></div>
				<h1>Sometimes I worry about <strong>being a success</strong> in a mediocre world</h1>
				<h2>The richest man is not the one who has the most, but the one who needs the least...</h2>
				<a href="portfolio.html" class="button">Portfolio</a> &nbsp; <a href="blog.html" class="button button_hilite">Our Services</a>
			</div>
		</div>
		<!-- Big Title Section::END-->


		<div class="row">
			<!-- Featured Services Section -->
			<h2 class="sixteen columns title"><span>Featured Services</span></h2>
			<div class="clear"></div>

			<div class="row">
				<div class="section_featured_services">
					<div class='carousel_arrows_bgr'></div>
					<ul id="featured_services_carousel">
						<li class="four columns">
							<div class="pic">
								<a href="service_item.html"><img src="images/th1.jpg"/><div class="img_overlay"></div></a>
							</div>
							<h4><a href="service_item.html">Bespoke Business Solutions</a></h4>
							<p>Life is what happens to you while you're busy making other plans.</p>
						</li>
						<li class="four columns">
							<div class="pic">
								<a href="service_item.html"><img src="images/th2.jpg"/><div class="img_overlay"></div></a>
							</div>
							<h4><a href="service_item.html">Free Legal Advice</a></h4>
							<p>Live as if you were to die tomorrow. Learn as if you were to live forever.</p>
						</li>
						<li class="four columns">
							<div class="pic">
								<a href="service_item.html"><img src="images/th3.jpg"/><div class="img_overlay"></div></a>
							</div>
							<h4><a href="service_item.html">Custom Templates</a></h4>
							<p>It is better to be hated for what you are than to be loved for what you are not.</p>
						</li>
						<li class="four columns">
							<div class="pic">
								<a href="service_item.html"><img src="images/th4.jpg"/><div class="img_overlay"></div></a>
							</div>
							<h4><a href="service_item.html">Sky is the Limit</a></h4>
							<p>The man who does not read has no advantage over one who cannot read.</p>
						</li>
						<li class="four columns">
							<div class="pic">
								<a href="service_item.html"><img src="images/th1.jpg"/><div class="img_overlay"></div></a>
							</div>
							<h4><a href="service_item.html">Bespoke Business Solutions</a></h4>
							<p>Life is what happens to you while you're busy making other plans.</p>
						</li>
						<li class="four columns">
							<div class="pic">
								<a href="service_item.html"><img src="images/th2.jpg"/><div class="img_overlay"></div></a>
							</div>
							<h4><a href="service_item.html">Free Legal Advice</a></h4>
							<p>Live as if you were to die tomorrow. Learn as if you were to live forever.</p>
						</li>
						<li class="four columns">
							<div class="pic">
								<a href="service_item.html"><img src="images/th3.jpg"/><div class="img_overlay"></div></a>
							</div>
							<h4><a href="service_item.html">Custom Templates</a></h4>
							<p>It is better to be hated for what you are than to be loved for what you are not.</p>
						</li>
					</ul>
				</div>
			</div>

			<script type="text/javascript">
				$(document).ready(function() {

						$('#featured_services_carousel').jcarousel({
						   	scroll: ($(window).width() > 767 ? 4 : 1),
						   	easing: 'easeInOutExpo',
						   	animation: 600
						});
				});

				// Reload carousels on window resize to scroll only 1 item if viewport is small
			    $(window).resize(function() {
			    	 var el = $("#featured_services_carousel"), carousel = el.data('jcarousel'), win_width = $(window).width();
			    	   var visibleItems = (win_width > 767 ? 4 : 1);
			    	   carousel.options.visible = visibleItems;
			    	   carousel.options.scroll = visibleItems;
			    	   carousel.reload();
			    });
			</script>
			<!-- Featured Services Section::END -->
		</div>




		<!-- Featured Texts Section -->
		<div class="row section_featured_texts">
			<div class="column one-third">
				<span class="icon big_screen"></span>
				<h3>Clean & Modern Design</h3>
				<p>Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.</p>
			</div>
			<div class="column one-third">
				<span class="icon big_cog"></span>
				<h3>Easy Customization</h3>
				<p>Whenever you find yourself on the side of the majority, it is time to pause and reflect.</p>
			</div>
			<div class="column one-third">
				<span class="icon big_profile"></span>
				<h3>Responsive Design</h3>
				<p>I am so clever that sometimes I don't understand a single word of what I am saying.</p>
			</div>
		</div>
		<!-- Featured Texts Section::END -->


		<div class="row">
			<div class="eight columns">

				<!-- Tabs -->
				<h2 class="title"><span>Why work with us?</span></h2>

				<div id="tabs" class="htabs">
					<a href="#tab-1" class="selected">Clean Design</a>
            		<a href="#tab-2">Element Rich</a>
            		<a href="#tab-3">Simply Awesome</a>
      			</div>

  				<div id="tab-1" class="tab-content">
  					<img src="images/bird.jpg" style="float: left; margin: 6px 5% 10px 0; width: 34%;"/>
  					<div  style="float: left; width: 61%;">
	  					<h4>Cleanest design out there</h4>
						<ul class="checked">
							<li>Visually aesthetic and easy on the eye</li>
							<li>Well balanced abd easy to navigate</li>
							<li>Intuitive and pleasant user experience</li>
						</ul>
					</div>
				</div>

      			<div id="tab-2" class="tab-content">
				    <h4>Our templates are very functional and Element-rich</h4>
					<ul class="arrowed">
						<li>Plenty of Shortcodes</li>
						<li>Premade and ready to use icons</li>
						<li>Sliders, carousels, tabbed data, testimonials and more</li>
					</ul>
				</div>

      			<div id="tab-3" class="tab-content">
				    Our templates are very functional and element rich, this way you have plenty of resources within a hand reach. They are also very easy to customized, clearly coded and documented.
				</div>

				<script type="text/javascript">
					$('#tabs a').tabs();
				</script>
				<!-- Tabs::END -->

			</div>


			<div class="eight columns">
				<h2 class="title"><span>Client Testimonials</span></h2>

				<!-- Testimonials -->
				<div class="testimonials">
					<div class='carousel_arrows_bgr'></div>
					<ul id="testimonials_carousel">
						<li class="eight columns alpha">
							<div class="testimonial_quote">
	                            <div class="quote_content">
	                                <p>Wow, just the template we were looking for! Stunning clean design, element rich, clean code, browser friendly and easy to manage. Keep up the good work BlueOwlCreative!</p>
	                                <span class="quote_arrow"></span>
	                            </div>
	                            <div class="quote_author"><div class="icon_testimonial">Eric Rogers</div><span class="quote_author_description">Developer, COMODO</span>
	                            </div>
	                        </div>
	                    </li>
						<li class="eight columns alpha">
							<div class="testimonial_quote">
	                            <div class="quote_content">
	                                <p>On extremely short notice, BlueOwlCreative came up with the perfect design I previously envisioned for my company. Thank you for the personal touch, understanding and responsiveness to all our needs!</p>
	                                <span class="quote_arrow"></span>
	                            </div>
	                            <div class="quote_author"><div class="icon_testimonial">Rumiana Gigova</div><span class="quote_author_description">Managing Partner, LuxDresses</span></div>
	                        </div>
						</li>
						<li class="eight columns alpha">
							<div class="testimonial_quote">
	                            <div class="quote_content">
	                                <p>Awesome theme! Very intuitive to use, clean coded, and easy to customize. Just rated 5 stars! Will recommend to all our partners and friend! Thanks a lot again!</p>
	                                <span class="quote_arrow"></span>
	                            </div>
	                            <div class="quote_author"><div class="icon_testimonial">John Picket</div><span class="quote_author_description">Designer, BlueOwlCreative</span>
	                            </div>
	                        </div>
	                    </li>
					</ul>
				</div>
				<script type="text/javascript">
					jQuery(document).ready(function() {
					    jQuery('#testimonials_carousel').jcarousel({
					    	auto: 4,
					    	scroll: 1,
					        wrap: 'last',
					    	easing: 'easeInOutExpo',
					    	animation: 600
					    });
					});
				</script>
				<!-- Testimonials::END -->
			</div>
		</div>
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
		    	<li><a href="">Home</a></li>
		    	<li><a href="">Our Services</a></li>
		    	<li><a href="">Recent Work</a></li>
		    	<li><a href="">Our Blog</a></li>
		    	<li><a href="">About Us</a></li>
		    	<li><a href="">Contact Us</a></li>
		    </ul>
		  </div>
		  <div class="four columns">
		    <h3>Latest News</h3>
			<div class="footer_news_item clearfix">
				<div class="footer_pic">
					<a href=""><img src="images/footer_th1.jpg"/></a>
				</div>
				<h4><a href="">Those who mind don't matter, and vice-versa.</a></h4>
				<p class="date">8 Sept., 2012</p>
			</div>
			<div class="footer_news_item clearfix">
				<div class="footer_pic">
					<a href=""><img src="images/footer_th2.jpg"/></a>
				</div>
				<h4><a href="">Be yourself; everyone else is already taken.</a></h4>
				<p class="date">2 Sept., 2012</p>
			</div>
		  </div>

		  <div class="four columns">
		  	<h3>Get in Touch with Us</h3>
		  	<div class='icon_phone' title='Phone'>(792) 567 8745</div>
		    <div class='icon_mail' title='Email'>contact@aquacart.com</div>
		    <div class='icon_loc' title='Location'>3451 52nd Ave., New York City</div>

		  	<div class='clear'></div>
		  	<div class='h10'></div>

		  </div>
	  </div>
	  <div class="clear"></div>
	  <div class="footer_btm">
	  	<div class="footer_btm_inner">
		  	<a href="https://www.pinterest.com" target='_blank' class='icon_pinterest' title='Pinterest'>Pinterest</a>
	      	<a href="https://www.twitter.com" target='_blank' class='icon_tweet' title='Tweeter'>Tweeter</a>
			<a href="https://www.skype.com" class='icon_skype' title='Skype'>Skype</a>
		  	<a href="https://www.google.com" target='_blank' class='icon_google' title='Google+'>Google+</a>
	      	<a href="https://www.facebook.com" target='_blank' class='icon_facebook' title='Facebook'>Facebook</a>

		  	<div id="powered"><a href="https://themeforest.net/user/blueowlcreative/portfolio?ref=blueowlcreative" target="_blank">AquaCart Theme</a> © 2012 &nbsp; | &nbsp; <a href="http://www.blueowlcreative.com" target="_blank">BlueOwlCreative</a></div>
		</div>
	  </div>
	</div>
	<!-- Footer::END -->

  </div>

</body>
</html>
