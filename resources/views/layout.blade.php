<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/slider.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/kwiks.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
				var owl = $("#owl");
				owl.owlCarousel({
					items : 4, //10 items above 1000px browser width
					itemsDesktop : [995,3], //5 items between 1000px and 901px
					itemsDesktopSmall : [767, 2], // betweem 900px and 601px
					itemsTablet: [700, 2], //2 items between 600 and 0
					itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
					navigation : true,
				});
			})
			var Main = Main || {};
			jQuery(window).load(function() {
				window.responsiveFlag = jQuery('#responsiveFlag').css('display');
				Main.gallery = new Gallery();
				jQuery(window).resize(function() {
					Main.gallery.update();
				});
			});
			function Gallery(){
				var self = this,
					container = jQuery('.flexslider'),
					clone = container.clone( false );
					this.init = function (){
						if( responsiveFlag == 'block' ){
						var slides = container.find('.slides');
						slides.kwicks({
							max : 500,
							spacing : 0
						}).find('li > a').click(function (){
							return false;
						});
						} else {
							container.flexslider();
						}
					}
					this.update = function () {
						var currentState = jQuery('#responsiveFlag').css('display');
						if(responsiveFlag != currentState) {
							responsiveFlag = currentState;
							container.replaceWith(clone);
							container = clone;
							clone = container.clone( false );
							this.init();
						}
					}
				this.init();
			}
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
	@php
	$path=Request::path();
	@endphp
<!--==============================header=================================-->
		<header>
			<div class="clear"></div>
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current">
									<ul>
										<li><a href="#">history</a></li>
										<li><a href="#">offers</a></li>
										<li><a href="#">news</a>
										<ul>
											<li><a href="#">fresh </a></li>
											<li><a href="#">archive</a></li>
										</ul>
									</ul>
								</li>
								
								<li><a class="{{$path==='/' ? 'active':''}}" href="{{url('/')}}">Home </a></li>
								<li><a class="{{$path==='index1' ? 'active':''}}" href="{{url('index1')}}">Videos </a></li>
								<li><a class="{{$path==='index2' ? 'active':''}}" href="{{url('index2')}}">Campaigns</a></li>
								<li><a href="index-3.html">Volunteer </a></li>
								<li><a href="index-4.html">Contacts</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
		<div class="main">
<!--==============================Content=================================-->
			<div class="content"><div class="ic"></div>
				<div class="container_12">
					<div class="grid_8">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="images/page1_img1.jpg" alt="">
									<div class="flex-caption">
										<p>Hope</p>
									</div>
								</li>
								<li>
									<img src="images/page1_img2.jpg" alt="">
									<div class="flex-caption c2">
										<p>Save</p>
									</div>
								</li>
								<li>
									<img src="images/page1_img3.jpg" alt="">
									<div class="flex-caption">
										<p>Help</p>
									</div>
								</li>
							</ul>
						</div>
						<span id="responsiveFlag"></span>
					</div>
					<div class="grid_4">
						<a href="#" class="donate">Donate</a>
						<div class="text1">We can change the life of those who have no hope</div>
						<p>Etiam dui eros, laoreet sit amet est vel,modo venenatis eros. Fusce adipiscing quam id riss sagittis, non consequat lacus interdum. Proin  tincidunt nulla, eu sodales arcu.</p>
						Quisquerra nulla nunc, eu ultrices libero ultricies eget. Phasellus accumsan justo vitae feugiat placerat. Praesent vel ultrices velit. Suspendisse risus justo, lacinia vitae eleifend
					</div>
					<div class="clear"></div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">our Mission</div>
							<div class="pad">
								Faert sit amet est l,mmodo venenatis eros. Kusce ng quam id risus sagittisnel consequat lacusut tinn sodales arcuisqum.<div class="alright"><a href="#" class="btn">Read More</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">Latest Projects</div>
							<div class="pad">
								Keet sit amet est el,mmodo venenatis eros. Fusce ng quam id risus sagittisnel consequat lacusut tinn sodales arcuisque.<div class="alright"><a href="#" class="btn">Read More</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">publications</div>
							<div class="pad">
								Boetosit amet est el,mmodo venenatis eros. Musce ng quam id risus sagittisnel monsequat lacusut tinn
								sodales arcuisqut <div class="alright"><a href="#" class="btn">Read More</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">Participate</div>
							<div class="pad">Holot sit amet est el,mmodo venenatis eros. Jolosceng huam id risus sagittisnel consequat lacusut tinn sodales arcuisqmol.<div class="alright"><a href="#" class="btn">Read More</a></div></div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_12">
						<h2>You can help Them</h2>
						<div id="owl">
						@yield('content')
						</div>
						</div>
					</div>
					<div class="grid_4">
						<h3 class="nowrap mb0">Successful stories</h3>
						<time class="st1" datetime="2013-01-01">29.11.2013</time>
						Lorem ipsum dolor sit amet, consectetur iscing elit. Inllis eratattis neque facilisis, sit ameticies erat rutrum. Cras facilisis, nulla velrral auctor leo magna sodales felis, quis malesuada nib odio ut velitylok. Proin pharetra luctus.
						<div class="alright"><a href="#" class="btn">Read More</a></div>
					</div>
					<div class="grid_7 prefix_1">
						<h3>About Us</h3>
						<img src="images/page1_img8.jpg" alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<p>All you wanted to know about this freebie produced by TemplateMonster.com, you can find <span class="col1"><a href=" http://blog.templatemonster.com/free-website-templates/" rel="dofollow">here</a></span>.</p>
							Visit the category of <span class="col1"><a href="http://www.templatemonster.com/category/charity-website-templates" rel="nofollow ">Charity templates</a></span> to find more themes of this kind.
						</div>
						<div class="clear"></div>
						<div class="alright"><a href="#" class="btn">Read More</a></div>
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
			<footer>
				<div class="hor bg3"></div>
				<div class="container_12">
					<div class="grid_12 ">
						<div class="socials">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<div class="clear"></div>
						</div>
						<div class="copy">
							<strong>Life in Color</strong>   &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a><br>
							Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a><br>Popular free website templates <a href="http://www.websitetemplatesonline.com" target="_blank">at www.WebsiteTemplatesOnline.com</a>. <a href="http://www.getjoomlatemplatesfree.com/" title="Free Joomla Themes">GetJoomlaTemplatesFreee.com</a> - impressive Joomla templates for websites.
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>