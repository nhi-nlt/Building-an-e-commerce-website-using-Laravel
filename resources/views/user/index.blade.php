<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from template.hasthemes.com/selphy/selphy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:03:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/favicon.webp"> -->
		
		<!-- Google Fonts -->		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>	   

		<!-- CSS
		============================================ -->
	
		<!-- Icon Font CSS -->
		<link rel="stylesheet" href="../css/font-awesome.css">
	
		<!-- Plugins CSS -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/meanmenu.min.css">
		<link rel="stylesheet" href="../css/nivo-slider.css">
		<link rel="stylesheet" href="../css/jquery-ui-slider.css">
		<link rel="stylesheet" href="../css/jquery.simpleLens.css">
		<link rel="stylesheet" href="../css/jquery.simpleGallery.css">
		<link rel="stylesheet" href="../css/owl.carousel.min.css">
	
		<!-- Main Style CSS -->
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="../css/responsive.css">
		<link rel="stylesheet" href="../css/customer.css">
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
												<li><a class="account" href="{{ route('login') }}">Account<i class="fa fa-angle-down"></i></a>
													<!-- <ul>
														<li><a href="wishlist.html">My Wishlist</a></li>
														<li><a href="cart.html">My Cart</a></li>
														<li><a href="checkout.html">Checkout</a></li>
														<li><a href="my-account.html">Log Out</a></li>
													</ul> -->
												</li> 
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
											<li><a href="{{ route('home') }}" class="active">Home</a></li>
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

		<!-- Main Slider Area -->
		<div class="main-slider-area">
			<!-- Main Slider -->
			<div class="main-slider">
				<div class="slider">
					<div id="mainSlider" class="nivoSlider slider-image">
						<a href="#"><img src="images/slider1.png" alt="main slider"></a>
						<a href="#"><img src="images/slider2.png" alt="main slider"></a>
						<a href="#"><img src="images/slider3.png" alt="main slider"></a>
					</div>
				</div>
			</div><!-- End Main Slider -->
		</div><!-- End Main Slider Area -->	
		<!-- Top Banner Area -->
		<div class="top-banner-area">
			<div class="container">
				<div class="row g-4">
					<div class="col-md-4 col-sm-6">
						<!-- Single Banner -->
						<div class="single-banner">
							<a href="#"><img src="images/banner3.gif" alt="banner"></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<!-- Single Banner -->
						<div class="single-banner">
							<a href="#"><img src="images/banner2.png" alt="banner"></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<!-- Single Banner -->
						<div class="single-banner">
							<a href="#"><img src="images/banner1.png" alt="banner"></a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Top Banner Area -->
		<!-- Single Product Area -->
		<div class="single-product-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Single Product Tab -->
						<div class="single-product-tab custom-tab">
							<!-- Tabs Bar -->
							<ul class="nav nav-tabs" role="tablist">
								<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone</a></li> <!-- href="#viewed" -->
							</ul>
							<!-- End Tabs Bar -->

							<!-- Tab Content-->
							<div class="tab-content">
								<!-- Tab Pane-->
								<div class="tab-pane active" id="bestseller">
									<!-- Bestsell Carousel -->
									<div id="bestsell-carousel" class="owl-carousel custom-carousel">
										<!-- Single Product -->
										
										@foreach ($iphoneList as $iphone)
												<div class="singel-product single-product-col">
													<div class="label-pro-sale">hot</div>
													<!-- Single Product Image -->
													<div class="single-product-img">
														<a href="#"><img src="images/{{ $iphone->img_path}}" alt="{{ $iphone->name}}"></a>
													</div>
													<!-- Single Product Content -->
													<div class="single-product-content">
														<h2 class="product-name"><a title="{{ $iphone->name}}" href="product-details.html"> {{ $iphone->name}}</a></h2>
														<div class="product-price">
															<p>{{ $iphone->price}}</p>
														</div>
														<!-- Single Product Actions -->
														<div class="product-actions">
															<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
															<div class="add-to-link">
																<ul class="">
																	<li class="quic-view"><button type="button" data-bs-target="#productModal" data-bs-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																	<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
																	<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
																</ul>
															</div>
														</div><!-- End Single Product Actions -->
													</div><!-- End Single Product Content -->
												</div><!-- End Single Product -->
										@endforeach

									</div><!-- Bestsell Carousel -->
								</div>
								<!-- End Tab Pane-->
							</div><!-- End Tab Content-->
						</div><!-- End Single Product Tab -->
					</div>
				</div>
			</div>
		</div><!-- End Single Product Area -->

		

		<!-- Product Area -->
		<div class="product-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Product Banner-->
						<div class="product-banner">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="single-banner first">
										<a href="#"><img src="images/banner4.png" alt="banner"></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="single-banner">
										<a href="#"><img src="images/banner5.png" alt="banner"></a>
									</div>
								</div>
								</div>
							</div>
						</div>
						<!-- End Product Banner-->
						<!-- Product View Area -->
						<div class="product-view-area fix">
							<!-- Single Product Category -->
							<div class="single-product-category">
								<!-- Product Category Title-->
								<ul class="nav nav-tabs" role="tablist">
									<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook</a></li> <!-- href="#viewed" -->
								</ul>
								<!-- Product View -->								
								<div class="product-view">
									<!-- Product View Carousel -->
									<div id="laptop-carousel" class="owl-carousel custom-carousel">
										<!-- Single Product -->

										@foreach ($macList as $mac)
												<div class="singel-product single-product-col">
													<div class="label-pro-sale">hot</div>
													<!-- Single Product Image -->
													<div class="single-product-img">
														<a href="#"><img src="images/{{$mac->img_path}}" alt="{{$mac->name}}"></a>
													</div>
													<!-- Single Product Content -->
													<div class="single-product-content">
														<h2 class="product-name"><a title="{{$mac->name}}" href="product-details.html"> {{$mac->name}}</a></h2>
														<div class="product-price">
															<p><span>$2099</span>{{$mac->price}}</p>
														</div>
														<!-- Single Product Actions -->
														<div class="product-actions">
															<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
															<div class="add-to-link">
																<ul class="">
																	<li class="quic-view"><button type="button" data-bs-target="#productModal" data-bs-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																	<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
																	<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
																</ul>
															</div>
														</div><!-- End Single Product Actions -->
													</div><!-- End Single Product Content -->
												</div><!-- End Single Product -->
										@endforeach

									</div><!-- End Product View Carousel -->
								</div><!-- End Product View-->

							</div><!-- End Single Product Category -->

							<!-- Single Product Category -->
							<div class="single-product-category">
								<!-- Product Category Title-->
								<ul class="nav nav-tabs" role="tablist">
									<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad</a></li> <!-- href="#viewed" -->
								</ul>
								<!-- Product View -->
								<div class="product-view">
									<!-- Product View Carousel -->
									<div id="tablet-carousel" class="owl-carousel custom-carousel">
										<!-- Single Product -->
										@foreach ($ipadList as $ipad)
												<div class="singel-product single-product-col">
													<div class="label-pro-sale">hot</div>
													<!-- Single Product Image -->
													<div class="single-product-img">
														<a href="#"><img src="images/{{$ipad->img_path}}" alt="{{$ipad->name}}"></a>
													</div>
													<!-- Single Product Content -->
													<div class="single-product-content">
														<h2 class="product-name"><a title="{{$ipad->name}}" href="product-details.html"> {{$ipad->name}}</a></h2>
														<div class="product-price">
															<p><span>$2099</span>{{$ipad->price}}</p>
														</div>
														<!-- Single Product Actions -->
														<div class="product-actions">
															<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
															<div class="add-to-link">
																<ul class="">
																	<li class="quic-view"><button type="button" data-bs-target="#productModal" data-bs-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																	<li class="wishlist"><a href="#"><i class="fa fa-heart"></i></a></li>
																	<li class="refresh"><a href="#"><i class="fa fa-refresh"></i></a></li>
																</ul>
															</div>
														</div><!-- End Single Product Actions -->
													</div><!-- End Single Product Content -->
												</div><!-- End Single Product -->
										@endforeach

									</div><!-- End Product View Carousel -->
								</div><!-- End Product View-->
								<!-- Product Banner-->
								<!-- <div class="product-banner">
									<div class="row">
										<div class="col-md-4 col-sm-4">
											<div class="single-banner first">
												<a href="#"><img src="assets/images/banner/banner7.webp" alt="banner"></a>
											</div>
										</div>
										<div class="col-md-8 col-sm-8">
											<div class="single-banner">
												<a href="#"><img src="assets/images/banner/banner6.webp" alt="banner"></a>
											</div>
										</div>
									</div>
								</div> --><!-- End Product Banner-->
							</div><!-- End Single Product Category -->
						</div><!-- End Product View Area -->
					</div>
				</div>
			</div>
		</div><!-- End Product Area -->
		<!-- Services Group -->
		<div class="services-group">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<!-- Our Services -->
						<div class="our-services">
							<div class="head-title">
								<p>Our Services</p>
							</div>
							<!-- Our Services Content -->
							<div class="container">
								<div class="row">
									<div class="col-lg-6">
										<!-- Single Services -->
										<div class="single-services">
											<div class="single-services-icon">
												<i class="fa fa-truck"></i>
											</div>
											<div class="single-services-content">
												<h2>Free delivery</h2>
												<p>Details delivery</p>
											</div>
										</div><!-- End Single Services -->
										<!-- Single Services -->
										<div class="single-services">
											<div class="single-services-icon">
												<i class="fa fa-tags"></i>
											</div>
											<div class="single-services-content">
												<h2>Sales & discounts</h2>
												<p>Details discount</p>
											</div>
										</div><!-- End Single Services -->
									</div>
									<div class="col-lg-6">
										<!-- Single Services -->
										<div class="single-services">
											<div class="single-services-icon">
												<i class="fa fa-thumbs-o-up"></i>
											</div>
											<div class="single-services-content">
												<h2>Buy online</h2>
												<p>Details buyonline</p>
											</div>
										</div><!-- End Single Services -->
										<!-- Single Services -->
										<div class="single-services">
											<div class="single-services-icon">
												<i class="fa fa fa-check"></i>
											</div>
											<div class="single-services-content">
												<h2>Quality assurance</h2>
												<p>Details Quality</p>
											</div>
										</div><!-- End Single Services -->
									</div>
								</div>
							</div>
						</div><!-- End Our Services -->
					</div>
					<div class="col-lg-4">
						<!-- Blog Post Area -->
						<div class="blog-post-area">
							<div class="head-title">
								<p>From the blog</p>
							</div>
							<div id="blog-post-carousel" class="owl-carousel custom-carousel-2">
								@foreach ($blogList as $blog)
									<!-- Single Blog Post -->
									<div class="single-blog-post">
										<div class="blog-post-img">
											<a href=""><img src="https://photo2.tinhte.vn/data/attachment-files/2022/05/5996927_cover_apple_buy_ea.jpg" alt="blog"></a>
										</div>
										<!-- Single Blog Post Content -->
										<div class="single-blog-post-content">
											<h2><a href="">{{$blog ->title}}</a></h2>
											<div class="date-time">
												<div class="time-blog">
													<i class="fa fa-calendar-o">&nbsp;</i> {{$blog ->created_at}} <span>/ by {{$blog->author}}</span>
												</div>
												<div class="time-comment">
													<span><i class="fa fa-comments-o"></i>0View </span>
												</div>
											</div>
											<p>{{$blog->content}}</p>
											<a href="" class="readmore">Read more</a>
										</div><!-- End Single Blog Post Content -->
									</div><!-- End Single Blog Post -->
								@endforeach
							</div>
						</div><!-- End Blog Post Area -->
					</div>
				</div>
			</div>
		</div><!-- End Services Group -->
		<!-- Brand Area -->
		<div class="brand-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="brand-add">
							<a href="#"><img src="images/banner6.png" alt="brand-logo"></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<!-- Brand Logo -->
						<div class="brand-logo">
								<a href="#"><img src="images/banner8.png" alt="brand-logo"></a>
								<a href="#"><img src="images/banner7.jpg" alt="brand-logo"></a>
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
		
		
		<!-- Quickview Product -->
		<div id="quickview-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="productModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
							<div class="modal-product">
								<div class="product-images">
									<div class="main-image images">
										<img alt="product" src="assets/images/products/s1.webp">
									</div>
								</div><!-- End product-images -->
								<div class="product-info">
									<h1>Proin lectus ipsum</h1>
									<div class="ratings">
										<div class="rating-box">  
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>  
										</div>
									</div>
									<p class="rating-links">
										<a href="#">1 Review(s)</a>
										<span class="separator">|</span>
										<a href="#" class="add-to-review">Add Your Review</a>
									</p>
									<p class="availability in-stock">Availability: <span>In stock</span></p>
									<div class="quick-desc">
										Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti
									</div>
									<div class="price-box">
										<p class="price"><span class="special-price"><span class="amount">$155.00</span></span></p>
									</div>
									<div class="quick-add-to-cart">
										<form method="post" class="cart">
											<div class="qty-button"> 	
												<input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
												
												<div class="box-icon button-plus"> 
													<input type="button" class="qty-increase " onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" value="+">
												</div>	
												<div class="box-icon button-minus">
													<input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" value="-">
												</div>
											</div>
											<div class="product-actions">
												<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
											</div>
										</form>
									</div>
									<div class="social-sharing">
										<div class="widget widget_socialsharing_widget">
											<h3 class="widget-title-modal">Share this product</h3>
											<ul class="social-icons">
												<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
												<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
												<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
												<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
												<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- End product-info -->
							</div><!-- End modal-product -->
						</div><!-- End modal-body -->
					</div><!-- End modal-content -->
				</div><!-- End modal-dialog -->
			</div><!-- End Modal -->
		</div><!-- End Quickview Product -->
				
		


	<!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
	<script src="../js/modernizr-2.8.3.min.js"></script>
	<script src="../js/jquery-1.12.4.min.js"></script>

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

<!-- Mirrored from template.hasthemes.com/selphy/selphy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:04:30 GMT -->
</html>
