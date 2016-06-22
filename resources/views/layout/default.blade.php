<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Edgar Sandoval">

	<title>Panda</title>

	<!-- CSS's -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	{{ Html::style( asset('js/tfingi-megamenu/tfingi-megamenu-frontend.css')) }}
	{{ Html::style( asset('css/common.css') ) }}
	@yield('style')

	<!-- JS's  -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.0/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.1/isotope.pkgd.min.js"></script>
	{{ Html::script( asset('js/tfingi-megamenu/tfingi-megamenu-frontend.js')) }}
	{{ Html::script( asset('js/common.js ')) }}
	@yield('script')

</head>
<body>
	<div class="loading">
		<div class="loader">
    		<h2 class="loading-text cd-headline clip is-full-width"> <span class="cd-words-wrapper"> <b class="is-visible">Espera</b> <b>Creando cosas increíbles...</b></span> </h2>
    		<div class="loading-image"><img src="images/loading.gif" alt="Image"></div>
		</div>
	<!-- end loader --> 
	</div>
	<!-- end loading -->
	<div class="transition-overlay"></div>
	<!-- end transition-overlay -->
	<div class="wrapper">
		<!-- Header -->
		<div class="header">
			<!-- Top bar -->
			@if(Auth::check())
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p>
								¡Bienvenido <a href="#"><strong>{{ Auth::user()->name }}</strong> !</a>
							</p>
						</div>
						<div class="col-sm-6 hidden-xs">
							<ul class="list-inline pull-right">
								<li>
									<a href="logout" title="Logout">Cerrar Sesión</a>									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- End class="top" -->
			@endif
			<!-- Logo & Search bar -->
			<div class="bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-5 col-md-6">
							
							<!-- Logo -->
							<div class="logo">
								<a href="{{ URL::to('/') }}" title="← Back home">
									<img src="{{ asset('images/logo.png')}} " alt="La Boutique">
								</a>
							</div>
							<!-- End class="logo"-->
						
						</div>
						<div class="col-sm-5 col-sm-offset-1 col-md-3">
							
							<!-- Search -->
							<div class="search">
								<div class="qs_s">

									<form method="post" action="search.html">
										<input type="text" name="query" id="query" placeholder="Buscar" autocomplete="off" value="">
									</form>

									<!-- Autocomplete results -->
									<div id="autocomplete-results" style="display: none;">	
										<ul>
											<li>
												<a title="Lisette Dress" href="product.html">
													<div class="image">
														<img src="img/thumbnails/db_file_img_48_60x60.jpg" alt="">
													</div>
													<h6>Lisette Dress</h6>
												</a>
											</li>
											<li>
												<a title="Malta Dress" href="product.html">
													<div class="image">
														<img src="img/thumbnails/db_file_img_137_60x60.jpg" alt="">
													</div>
													<h6>Malta Dress</h6>
													</a>
												</li>
												<li>
													<a title="Marais Dress" href="product.html">
														<div class="image">
															<img src="img/thumbnails/db_file_img_42_60x60.jpg" alt="">
														</div>
														<h6>Marais Dress</h6>
													</a>
												</li>
												<li>
													<a title="Millay Dress" href="product.html">
														<div class="image">
															<img src="img/thumbnails/db_file_img_107_60x60.jpg" alt="">
														</div>
														<h6>Millay Dress</h6>
													</a>
												</li>
												<li>
													<a title="Momoko Dress" href="product.html">
														<div class="image">
															<img src="img/thumbnails/db_file_img_132_60x60.jpg" alt="">
														</div>
														<h6>Momoko Dress</h6>
													</a>
												</li>
											</ul>
										</div>
										<!-- End id="autocomplete-results" -->
										
									</div>
								</div>
								<!-- End class="search"-->
								
							</div>
								
							<!-- Mini cart -->
							<div class="mini-cart">
								<a href="cart.html" title="Go to cart →">
									@if(Session::has('cart-items'))
										<span>{{Session::get('cart-items')}}</span>
									@endif
								</a>									
							</div>
							<!-- End class="mini-cart" -->

						</div>
					</div>
				</div>
				<!-- End class="bottom" -->
			</div>
			<!-- Navigation -->
			<nav class="navigation">
				<div class="container">
				 
					<div class="row">
						<div class="col-md-9">				
							<a href="#" class="main-menu-button">Navigation</a>
							<!-- Begin Menu Container -->
							<div class="megamenu_container">
								<div class="menu-main-navigation-container">
									<ul id="menu-main-navigation" class="main-menu">
									
										<li class="menu-item-home menu-item-has-children megamenu-parent  megamenu-columns-3" data-width="" style="position: relative;">
											<a href="index.html">Home</a>
											<ul class="sub-menu megamenu-sub-menu" style="width: 780px; margin-left: 0px;">
												<li class="megamenu-heading"><a href="#MegaMenuHeading"><h3>Responsive Full Width Megamenu</h3></a></li>
												<li class="menu-item-has-children megamenu-column">
													<a href="#MegaMenuColumn">Mega Menu Column</a>
													<ul class="megamenu-inner-sub-menu">
														<li class="megamenu-heading first-submenu-header"><a href="#MegaMenuHeading">Display images</a></li>
														<li class="megamenu-content">
															<p><img title="" alt="" src="img/megamenu/img01.jpg"></p>
															<p>Praesent a dolor sem. Sed scelerisque, tellus id pulvinar tristique, erat eros rutrum mi, id adipiscing arcu sem vel est. Ut ac turpis ipsum. Mauris leo nulla, vestibulum id bibendum.</p></li>
													</ul>
												</li>	
												<li class="menu-item-has-children megamenu-column"><a href="#MegaMenuColumn">Mega Menu Column</a>
													<ul class="megamenu-inner-sub-menu">
														<li class="megamenu-heading first-submenu-header"><a href="#MegaMenuHeading">Display videos</a></li>
														<li class="megamenu-content"><p> <iframe src="//player.vimeo.com/video/68161548" width="225" height="144" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
															</p>
															<p>Praesent a dolor sem. Sed scelerisque, tellus id pulvinar tristique, erat eros rutrum mi, id adipiscing arcu sem vel est. Ut ac turpis ipsum. Mauris leo nulla, vestibulum id bibendum.</p></li>
													</ul>
												</li>
												<li class="menu-item-has-children megamenu-column"><a href="#MegaMenuColumn">Mega Menu Column</a>
													<ul class="megamenu-inner-sub-menu">
														<li class="megamenu-heading first-submenu-header"><a href="#MegaMenuHeading">And Google maps!</a></li>
														<li class="megamenu-content">
															<p>
																<iframe width="100%" height="144" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/?ie=UTF8&amp;t=m&amp;ll=52.204004,0.122824&amp;spn=0.005865,0.014677&amp;z=11&amp;output=embed"></iframe>
															</p>
															<p>
																<strong>La Boutique</strong><br>
																<em class="fa fa-map-marker fa-lg"></em> Regent Ave, Cambridge<br>
																<em class="fa fa-phone fa-lg"></em> +1 800-123-4567
															</p>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										
										<li class="menu-item-has-children">
											<a href="category.html">Shop</a>
											<ul class="sub-menu">
												<li class="menu-item-has-children">
													<a href="category.html">Womens</a>
													<ul class="sub-menu">
														<li><a href="category.html">Dresses</a></li>
														<li><a href="category.html">Tops</a></li>
														<li><a href="category.html" title="Shirts">Shirts</a></li>
														<li><a href="category.html" title="Shoes">Shoes</a></li>
														<li class="menu-item-has-children"><a href="#_" title="Accesories">Accesories</a>
															<ul>
																<li><a href="category.html" title="Hats">Hats</a></li>
																<li><a href="category.html" title="Belts">Belts</a></li>
																<li><a href="category.html" title="Socks">Socks</a></li>

																<li class="menu-item-has-children"><a href="#_" title="More levels"><strong>And much more...</strong></a>
																	<ul>
																		<li><a href="#_" title="Earphones">Earphones</a></li>
																		<li><a href="#_" title="Headphones">Headphones</a></li>
																		<li><a href="#_" title="Sunglasses">Sunglasses</a></li>
																	</ul>
																</li>
															</ul>
														</li> 
													</ul>
												</li>
												<li class="menu-item-has-children">
													<a href="category.html">Mens</a>
													<ul class="sub-menu">
														<li><a href="category.html">Shoes</a></li>
														<li><a href="category.html">Accesories</a></li>
														<li><a href="category.html" title="Shirts">Shirts</a></li>
														<li><a href="category.html" title="Shoes">Shoes</a></li>
													</ul>
												</li>
												<li class="menu-item-has-children">
													<a href="category.html">Girls</a>
													<ul class="sub-menu">
														<li><a href="category.html">Dresses</a></li>
														<li><a href="category.html">Tops</a></li>
														<li><a href="category.html" title="Shirts">Shirts</a></li>
														<li><a href="category.html" title="Shoes">Shoes</a></li>
														<li class="menu-item-has-children"><a href="#_" title="Accesories">Accesories</a>
															<ul>
																<li><a href="category.html" title="Hats">Hats</a></li>
																<li><a href="category.html" title="Belts">Belts</a></li>
																<li><a href="category.html" title="Socks">Socks</a></li>
																<li class="menu-item-has-children">
																	<a href="#_" title="More levels"><strong>And much more...</strong></a>
																	<ul>
																		<li><a href="#_" title="Earphones">Earphones</a></li>
																		<li><a href="#_" title="Headphones">Headphones</a></li>
																		<li><a href="#_" title="Sunglasses">Sunglasses</a></li>
																	</ul>
																</li>
															</ul>
														</li> 
													</ul>
												</li>
												<li><a href="category.html" title="Sale">Sale</a></li>
											</ul>
										</li>
										
										<li class="menu-item-has-children megamenu-parent megamenu-columns-3" data-width="550" style="position: relative;">
											<a href="#">Features</a>
											<ul class="sub-menu megamenu-sub-menu" style="width: 550px; margin-left: 0px;">
												<li class="menu-item-has-children megamenu-column"><a href="#MegaMenuColumn">Mega Menu Column</a>
													<ul class="megamenu-inner-sub-menu">
														<li class="megamenu-heading first-submenu-header"><a href="#MegaMenuHeading">Components</a></li>
														<li><a href="typography.html" title="Typography" class="title">Typography</a></li>
														<li><a href="retina-ready-icons.html" title="Retina-ready icons" class="title">Retina-ready icons</a></li>
														<li><a href="buttons.html" title="Buttons" class="title">Buttons</a></li>
														<li><a href="elements.html" title="Elements" class="title">Elements</a></li>
														<li><a href="grids.html" title="Grids" class="title">Grids</a></li>
													</ul>
												</li>
												<li class="menu-item-has-children megamenu-column"><a href="#MegaMenuColumn">Mega Menu Column</a>
													<ul class="megamenu-inner-sub-menu">
														<li class="megamenu-heading first-submenu-header"><a href="#MegaMenuHeading">Pages</a></li>
														<li><a href="about-us.html" title="About us" class="title">About us</a></li>
														<li><a href="store-locator.html" title="Store locator" class="title">Store locator</a></li>
														<li><a href="blog.html" title="Blog" class="title">Blog</a></li>
														<li><a href="contact-us.html" title="Contact us" class="title">Contact us</a></li>
														<li><a href="404.html" title="404" class="title">404 Not found</a></li>	
													</ul>
												</li>
												<li class="menu-item-has-children megamenu-column"><a href="#MegaMenuColumn">Mega Menu Column</a>
													<ul class="megamenu-inner-sub-menu">
														<li class="megamenu-heading first-submenu-header"><a href="#MegaMenuHeading">Accounts</a></li>
														<li><a href="order-history.html">Order History</a></li>
														<li><a href="checkout-start.html">Login / Register</a></li>
														<li><a href="reset-password.html">Reset password</a></li>
														<li><a href="change-password.html">Change password</a></li>
														<li><a href="checkout.html">Checkout</a></li>
													</ul>
												</li>
												<li class="megamenu-heading"><a href="#MegaMenuHeading">Socialize with us</a></li>
												<li class="megamenu-content">
													<ul class="social">
														<li><a title="Twitter" href="#" class="twitter">Twitter</a></li>
														<li><a title="Facebook" href="#" class="facebook">Facebook</a></li>
														<li><a title="Pinterest" href="#" class="pinterest">Pinterest</a></li>
														<li><a title="YouTube" href="#" class="youtube">YouTube</a></li>
														<li><a title="Vimeo" href="#" class="vimeo">Vimeo</a></li>
														<li><a title="Flickr" href="#" class="flickr">Flickr</a></li>
														<li><a title="Google+" href="#" class="googleplus">Google+</a></li>
														<li><a title="Dribbble" href="#" class="dribbble">Dribbble</a></li>
														<li><a title="Forrst" href="#" class="forrst">Forrst</a></li>
														<li><a title="Tumblr" href="#" class="tumblr">Tumblr</a></li>
														<li><a title="Digg" href="#" class="digg">Digg</a></li>
														<li><a title="Linkedin" href="#" class="linkedin">Linkedin</a></li>
														<li><a title="Instagram" href="#" class="instagram">Instagram</a></li>
													</ul>
												</li>
											</ul>
										</li>
										
										<li><a href="blog.html">Blog</a></li>
										
										<li><a href="store-locator.html">Store locator</a></li>
										
										<li><a href="cart.html">Cart</a></li>
										
										<li class="menu-item-has-children megamenu-parent megamenu-columns-1" data-width="400" style="position: relative;">
											<a href="contact-us.html">Contact Us</a>
											<ul class="sub-menu megamenu-sub-menu" style="width: 400px; margin-left: -148px;">
												<li class="megamenu-column"><a href="#MegaMenuColumn">Mega Menu Column</a></li>
												<li class="megamenu-heading"><a href="#MegaMenuHeading">Contact Us</a></li>
												<li class="megamenu-content">
													<div class="wpcf7">
														<form action="" method="post" class="wpcf7-form" novalidate="novalidate">
															<label>Your Name (required)</label>
															<input type="text" name="your-name" value="" size="40" aria-required="true">
															<label>Your Email (required)</label>
															<input type="email" name="your-email" value="" size="40" aria-required="true">
															<label>Subject</label>
															<input type="text" name="your-subject" value="" size="40">
															<label>Your Message</label>
															<textarea name="your-message" cols="40" rows="10"></textarea>

															<input type="submit" value="Send" class="btn btn-primary">
														</form>
													</div>
												</li>
											</ul>
										</li>
										
									</ul>
								</div>	
							</div>	
						</div>
						<div class="col-md-3 visible-lg">	
						</div>
					</div>			
				</div>
			</nav>
			<!-- End class="navigation" -->
			<!-- Content section -->
			<section class="main">
				@yield('main')
			</section>
		</div>	
</body>
</html>