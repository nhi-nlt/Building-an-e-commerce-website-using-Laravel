<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from template.hasthemes.com/selphy/selphy/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:04:45 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/favicon.webp"> -->
		
		<!-- Google Fonts -->		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>	   

		<!-- CSS
		============================================ -->
	
		<!-- Icon Font CSS -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	
		<!-- Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/nivo-slider.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery-ui-slider.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery.simpleLens.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery.simpleGallery.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	
		<!-- Main Style CSS -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
				
		<!-- Header Area -->
		<div class="header-area">

			<!-- Header Top -->
			<div class="header-top">
				<div class="container">
					<!-- Header Top Bar-->
					<div class="header-top-bar">
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<!-- Header Top Left-->
								<div class="header-top-left">
									<div class="call-header">
										<p><i class="fa fa-phone"></i><span> 0792761479 - 0842593661</span></p>
									</div>
									{{-- <div class="header-login">
										<a href="my-account.html">Log in</a>
									</div> --}}
								</div><!-- End Header Top Left-->
							</div>
							<div class="col-lg-7 col-md-6">
								<!-- Header Top Right-->
								<div class="header-top-right">
									<!-- Header Link Area -->
									<div class="header-link-area">
										<div class="header-link">
											<ul>
												<li><a class="english" href="#">English<i class="fa fa-angle-down"></i></a>
													<ul>
														<li><a href="#">English</a></li>
														<li><a href="#">Viet Nam</a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="header-link">
											<ul>
												<li class=""><a class="usd" href="#">USD<i class="fa fa-angle-down"></i></a>
													<ul>
														<li><a href="#">USD</a></li>
														<li><a href="#">VND</a></li>
													</ul>
												</li>
												{{-- <li><a class="account" href="#">Account<i class="fa fa-angle-down"></i></a>
													<ul>
														<li><a href="my-account.html">My Account</a></li>
														<li><a href="wishlist.html">My Wishlist</a></li>
														<li><a href="cart.html">My Cart</a></li>
														<li><a href="checkout.html">Checkout</a></li>
													</ul>
												</li> --}}
											</ul>
										</div>
									</div><!-- End Header Link Area -->
								</div><!-- End Header Top Right-->
							</div>
						</div>
					</div>
					<!-- End Header Top Bar-->
				</div>
			</div><!-- End Header Top -->

			<!-- Header Bottom -->
			<div class="header-bottom">
				<div class="container">
					<!-- Header Bottom Inner-->
					<div class="header-bottom-inner">
						<div class="row justify-content-between">
							<div class="col-lg-3 col-md-4 col-sm-4 col-6 order-lg-1">
								<!-- Header Logo -->
								<div class="header-logo">
									<a href="{{ route('home') }}"><img src="images/logoApple2.png" alt="logo"></a>
								</div>
							</div>
							<div class="col-lg-2  col-md-3 col-sm-4 col-5 order-lg-3">
								<!-- Header Actions Area-->
								<div class="header-actions">
									<div class="header-cart">
										<a class="cart" href="#">
											<i class="fa fa-shopping-cart"></i>
											<span class="my-cart">Cart</span>
										</a>
										<div class="header-cart-dropdown">
											<div class="dropdown-cart-items">
												<!-- <div class="cart-item">
													<div class="cart-img">
														<a href="#"><img src="assets/images/cart/c1.webp" alt="cart" /></a>
													</div>
													<div class="cart-content">
														<h5 class="title"><a href="#">Aliquam consequat</a></h5>
														<p>1 x <span>$432.00</span></p>
													</div>
													<div class="cart-action">
														<a href="#"><i class="fa fa-pencil"></i></a>
														<a href="#"><i class="fa fa-times"></i></a>
													</div>
												</div> -->
												<!-- <div class="cart-item">
													<div class="cart-img">
														<a href="#"><img src="assets/images/cart/c2.webp" alt="cart" /></a>
													</div>
													<div class="cart-content">
														<h5 class="title"><a href="#">Proin lectus ipsum</a></h5>
														<p>1 x <span>$432.00</span></p>
													</div>
													<div class="cart-action">
														<a href="#"><i class="fa fa-pencil"></i></a>
														<a href="#"><i class="fa fa-times"></i></a>
													</div>
												</div> -->
											</div>
											
											<div class="cart-total-btn">
												<div class="cart-subtotal">
													<!-- <p>Subtotal: <span>$1,131.00</span></p> -->
												</div>
												<div class="cart-btn">
													<button type="button" class="btn">checkout</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- End Header Actions Area-->
							</div>
							<div class="col-lg-7 order-lg-2">
								<div class="header-search">
									<!-- All Categorie -->
									<div class="all-categories">
										<select id="product-categori">
											<option value="All Categories">All Categories</option>
											<option value="Categorie laptop">Macbook</option>
											<option value="Categorie moblie">Iphone</option>
											<option value="Categorie table">Ipad </option>
											<option value="Categorie headphone">Airpods </option>
										</select>
									</div>
									<!-- End All Categorie -->
									<div class="search-form">
										<form action="#">
											<input type="text" class="input-text" name="q" id="search" placeholder="Search entire store here...">
											<button type="submit"><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Header Bottom Inner-->
				</div>
			</div><!-- End Header Bottom -->

		</div>
		<!-- End Header Area -->

		<!-- Main Menu Area -->
		<div class="main-menu-area main-menu-area-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3">
								<!-- Category Menu -->
								<div class="category-menu d-none d-lg-block">
									<div class="category-menu-title">
										<h2>Categories</h2>
									</div>
									<div class="categorie-list">
										<ul>
											<li><a href="{{ route('search-products', ['category'=>'mac']) }}"><img src="{{ asset('images/iconMac.png') }}" alt="icon">Macbook<i class="fa fa-caret-right"></i></a>
												<ul class="mega-menu-ul">
													<li>
														<!--Mega Menu -->
														<div class="mega-menu">
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'mac']) }}">Macbook Air</a></h2>
																<a href="{{ route('search-products', ['category'=>'mac']) }}"><img src="{{ asset('images/macbookAir.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'mac']) }}">Macbook Pro 13</a></h2>
																<a href="{{ route('search-products', ['category'=>'mac']) }}"><img src="{{ asset('images/macbook13.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'mac']) }}">Macbook Pro 14</a></h2>
																<a href="{{ route('search-products', ['category'=>'mac']) }}"><img src="{{ asset('images/macbookPro14.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'mac']) }}">Macbook Pro 16</a></h2>
																<a href="{{ route('search-products', ['category'=>'mac']) }}"><img src="{{ asset('images/macbookPro16.jpg') }}" alt="logo"></a>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li><a href="{{ route('search-products', ['category'=>'iphone']) }}"><img src="{{ asset('images/iconIphone.png') }}" alt="icon">Iphone<i class="fa fa-caret-right"></i></a>
												<ul class="mega-menu-ul">
													<li>
														<!--Mega Menu -->
														<div class="mega-menu">
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13 mini</a></h2>
																<a href="{{ route('search-products', ['category'=>'iphone']) }}"><img src="{{ asset('images/iphone13.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13</a></h2>
																<a href="{{ route('search-products', ['category'=>'iphone']) }}"><img src="{{ asset('images/iphone13.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13 Pro</a></h2>
																<a href="{{ route('search-products', ['category'=>'iphone']) }}"><img src="{{ asset('images/iphone13pm.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13 ProMax</a></h2>
																<a href="{{ route('search-products', ['category'=>'iphone']) }}"><img src="{{ asset('images/iphone13pm.jpg') }}" alt="logo"></a>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li><a href="{{ route('search-products', ['category'=>'ipad']) }}"><img src="{{ asset('images/iconIpad.png') }}" alt="icon">Ipad<i class="fa fa-caret-right"></i></a>
												<ul class="mega-menu-ul">
													<li>
														<!--Mega Menu -->
														<div class="mega-menu">
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad gen 9</a></h2>
																<a href="{{ route('search-products', ['category'=>'ipad']) }}"><img src="{{ asset('images/ipadGen.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad Air</a></h2>
																<a href="{{ route('search-products', ['category'=>'ipad']) }}"><img src="{{ asset('images/ipadAir.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad Pro 11</a></h2>
																<a href="{{ route('search-products', ['category'=>'ipad']) }}"><img src="{{ asset('images/ipadPro11.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad Pro 12.9</a></h2>
																<a href="{{ route('search-products', ['category'=>'ipad']) }}"><img src="{{ asset('images/ipadPro12.9.jpg') }}" alt="logo"></a>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li><a href="#"><img src="{{ asset('images/iconAirpods.png') }}" alt="icon">Airpods<i class="fa fa-caret-right"></i></a>
												<ul class="mega-menu-ul">
													<li>
														<!--Mega Menu -->
														<div class="mega-menu">
															<div class="single-mega-menu">
																<h2><a href="shop-list.html">Airpods 2</a></h2>
																<a href="shop-list.html"><img src="{{ asset('images/airPod2.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="shop-list.html">Airpods Pro</a></h2>
																<a href="shop-list.html"><img src="{{ asset('images/airPodsPro.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="shop-list.html">Airpods 3</a></h2>
																<a href="shop-list.html"><img src="{{ asset('images/airPods3.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="shop-list.html">Airpods Max</a></h2>
																<a href="shop-list.html"><img src="{{ asset('images/airPodsMax.jpg') }}" alt="logo"></a>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<!-- <li><a href="#"><img src="img/icon/m5.html" alt="icon">Camera & Photo</a></li>
											<li><a href="#"><img src="img/icon/m6.html" alt="icon">Accessories</a></li> -->
											<!-- Menu Accordion-->
											<!-- <li class=" rx-child"><a href="#"><img src="img/icon/m7.html" alt="icon">Destop</a></li>
											<li class=" rx-child"><a href="#">Shop All</a></li>
											<li class=" rx-parent">
												<a class="rx-default"><img src="img/icon/m8.html" alt="icon">More categories</a>
												<a class="rx-show"><img src="img/icon/m9.html" alt="icon">close menu</a>
											</li> -->
											<!-- End Menu Accordion-->
										</ul>
									</div>
								</div><!-- End Category Menu -->
							</div>
							<div class="col-lg-9">
								<!-- Manin Menu -->
								<div class="main-menu d-none d-lg-block">
									<nav>
										<ul>
											<li><a href="{{ route('home') }}" class="active">Home</a>
											</li>
											<li><a href="{{ route('contact') }}">Contact Us</a></li>
											<li><a href="{{ route('blog') }}">Blog</a></li>
                                            <li><a href="{{ route('products') }}">All Products</a></li>
										</ul>
									</nav>
								</div><!-- End Manin Menu -->
								<!-- Start Mobile Menu -->
								<div class="mobile-menu d-block d-lg-none">
									<nav>
										<ul>
											<li class=""><a href="{{ route('home') }}">Home</a>
											</li>
											<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook</a>
												<ul class="">
													<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook Air</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook Pro 13</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook Pro 14</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook Pro 16</a>
													</li>
												</ul>
											</li>
											<li class=""><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone</a>
												<ul class="">
													<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13 mini</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13 Pro</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13 ProMax</a>
													</li>
												</ul>
											</li>
											<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad</a>
												<ul class="">
													<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad gen 9</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad Air</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad Pro 11</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad Pro 12.9</a>
													</li>
												</ul>
											</li>														
											<li><a href="{{ route('search-products', ['category'=>'airpod']) }}">Airpods</a>
												<ul class="">
													<li><a href="{{ route('search-products', ['category'=>'airpod']) }}">Airpods 2</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'airpod']) }}">Airpods Pro</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'airpod']) }}">Airpods 3</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'airpod']) }}">Airpods Max</a>
													</li>
												</ul>
											</li>
										</ul>
									</nav>
								</div><!-- End Mobile Menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main Menu Area -->

		<!-- Contact area -->
		<div class="contact-area">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-12">
								<!-- Map area -->
								<div class="map-area">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.8080684228!2d106.66398021472097!3d11.053012092134239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d1d7df763eaf%3A0xf4323e44f2867057!2zxJDhuqFpIGjhu41jIFF14buRYyB04bq_IE1p4buBbiDEkMO0bmc!5e0!3m2!1svi!2s!4v1650762285088!5m2!1svi!2s" width="1120" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div><!-- End Map area -->
							</div>
						</div>
						<div class="row">
							<!-- contact info -->
							<div class="col-lg-6 col-md-12 col-12">
								<div class="contact-info">
									<h3>Contact info</h3>
									<ul>
										<li>
											<p class="adress"> Eastern International University</p>
										</li>
										<li>
											<p class="phone"> 0792 761 479 <br> 0842 593 661</p>
										</li>
										<li>
											<p class="email"> loi.duong.cit20@eiu.edu.vn <br> nhi.nguyenle.cit19@eiu.edu.vn</p>
										</li>
									</ul>
								</div>
							</div><!-- End contact info -->
							<div class="col-lg-6 col-md-12 col-12">
								<div class="contact-form">
									<h3><i class="fa fa-envelope-o"></i> Leave a Message</h3>
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input name="name" type="text" placeholder="Name (required)" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input name="email" type="email" placeholder="Email (required)" />
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <input name="subject" type="text" placeholder="Subject" />
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                                <input type="submit" value="Submit Form" />
                                            </div>
                                        </div>
                                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Eontact area -->

		<!-- Brand Area -->
		<div class="brand-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="brand-add">
							<a href="#"><img src="{{ asset('images/banner6.png') }}" alt="brand-logo"></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<!-- Brand Logo -->
						<div class="brand-logo">
								<a href="#"><img src="{{ asset('images/banner8.png') }}" alt="brand-logo"></a>
								<a href="#"><img src="{{ asset('images/banner7.jpg') }}" alt="brand-logo"></a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Brand Area -->		
		<!-- Footer Area -->
		<div class="footer-area">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<!-- Block Subscribe -->
							<div class="block-subscribe">
								<div class="subscribe-title">
									<div class="icon"><i class="fa fa-envelope-o"></i></div>
								</div>
								<div class="subscribe-form">
									<form action="#">
										<div class="subscribe-input-box">
										   <input type="text" title="Sign up for our newsletter" name="email" required="required">
										</div>
										<div class="subscribe-action">
										   <button title="Subscribe" type="submit">Subscribe</button>
										</div>
									</form>
								</div>
							</div><!-- End Block Subscribe -->
						</div>
						<div class="col-lg-4">
							<!-- Social Footer -->
							<div class="social-footer">
								<ul class="link-follow">
									<li class="first">
										<a href="#" class="facebook fa fa-facebook"></a>
									</li>
									<li>
										<a href="#" class="twitter fa fa-twitter"></a>
									</li>
									<li>
										<a href="#" class="google fa fa-google-plus"></a>
									</li>
									<li>
										<a href="#" class="instagram fa fa-instagram"></a>
									</li>
								</ul>
							</div><!-- End Social Footer -->
						</div>
					</div>
				</div>
			</div><!-- End Footer Top -->
			<!-- Footer Static -->
			<div class="footer-static">
				<div class="container">
				    <div class="footer-bottom-wrap">
				        <!-- Single Footer Static -->
                        <div class="single-footer-static static-info">
                            <div class="footer-static-title">
                                <h3>Information</h3>
                            </div>
                            <div class="footer-static-content">
                                <ul>
                                    <li><a href="{{ route('contact') }}">About us</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div>
                        </div><!-- End Single Footer Static -->
                        <!-- Single Footer Static -->
                        <div class="single-footer-static">
                            <div class="footer-static-title">
                                <h3>Customer Service</h3>
                            </div>
                            <div class="footer-static-content">
                                <ul>
                                    <li><a href="#">Shipping Policy</a></li>
                                    <li><a href="#">Compensation First</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div><!-- End Single Footer Static -->
                        <!-- Single Footer Static -->
                        <div class="single-footer-static static-shipping">
                            <div class="footer-static-title">
                                <h3>Payment & Shipping</h3>
                            </div>
                            <div class="footer-static-content">
                                <ul>	
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Shipping Guide</a></li>
                                    <li><a href="#">Locations We Ship To</a></li>
                                    <li><a href="#">Estimated Delivery Time</a></li>
                                </ul>
                            </div>
                        </div><!-- End Single Footer Static -->
                        <!-- Single Footer Static -->
                        <div class="single-footer-static static-account">
                            <div class="footer-static-title">
                                <h3>My Account</h3>
                            </div>
                            <div class="footer-static-content">
                                <ul>								
                                    <li><a href="#">My Addresses</a></li>
                                    <li><a href="#">Gift Vouchers</a></li>
                                    <li><a href="#">Returns and Exchanges</a></li>
                                    <li><a href="#">Shipping Options</a></li>
                                    <li><a href="#">My personal info</a></li>
                                </ul>
                            </div>
                        </div><!-- End Single Footer Static -->
                        <!-- Single Footer Static -->
                        <div class="single-footer-static static-contact">
                            <div class="footer-static-title">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="footer-static-content">							
                                <div class="contact-info">
                                    <p class="phone">0792 761 479 - 0842 593 661</p>
                                    <p class="email">loi.duong.cit20@eiu.edu.vn - nhi.nguyenle.cit19@eiu.edu.vn</p>
                                    <p class="adress">Eastern International University</p>
                                </div>
                            </div>
                        </div><!-- End Single Footer Static -->
				    </div>
				</div>
			</div><!-- End Footer Static -->
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<!-- Copyright -->
							<div class="copyright">
								<p>&copy; 2022 <span> Apple Site </span> Made by Loi & Nhi</p>
							</div>						
						</div>
						<div class="col-md-6">
							<!-- Footer Payment -->
							<div class="footer-payment">
								<a href="#"><img src="assets/images/logo/payment.webp" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End Footer Bottom -->
		</div><!-- End Footer Area -->
		
		<!-- jquery
		============================================ -->		
        <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
        <!-- Popper JS
		============================================ -->		
        <script src="{{ asset('js/popper.min.js') }}"></script>
		<!-- bootstrap JS
		============================================ -->		
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<!-- nivo slider js
		============================================ --> 
		<script src="{{ asset('js/jquery.nivo.slider.pack.js') }}"></script>
		<!-- Mean Menu js
		============================================ -->         
        <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
		<!-- price-slider JS
		============================================ -->		
        <script src="{{ asset('js/js/jquery-price-slider.js') }}"></script>
		<!-- Simple Lence JS
		============================================ -->
		<script type="text/javascript" src="{{ asset('js/jquery.simpleGallery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.simpleLens.min.js') }}"></script>	
		<!-- owl.carousel JS
		============================================ -->		
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<!-- scrollUp JS
		============================================ -->		
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
		<!-- DB Click JS
		============================================ -->
        <script src="{{ asset('js/dbclick.min.js') }}"></script>
		<!-- Countdown JS
		============================================ -->
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
				
        <script src="{{ asset('js/plugins.js') }}"></script>
		<!-- main JS
		============================================ -->		
        <script src="{{ asset('js/main.js') }} "></script>
    </body>

<!-- Mirrored from template.hasthemes.com/selphy/selphy/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:05:03 GMT -->
</html>
