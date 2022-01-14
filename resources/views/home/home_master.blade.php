<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>CoffeeShop</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/favicon.ico')}}">
	<!-- Place favicon.ico in the root directory -->

	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

	<!-- all css here -->
	<!-- bootstrap v5 css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
	<!-- jquery-ui.min css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/jquery-ui.min.css')}}">
	<!-- meanmenu css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}">
	<!-- nivo-slider css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/lib/css/nivo-slider.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/assets/lib/css/preview.css')}}">
	<!-- slick css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/slick.min.css')}}">
	<!-- lightbox css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/lightbox.min.css')}}">
	<!-- material-design-iconic-font css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/material-design-iconic-font.css')}}">
	<!-- All common css of theme -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/default.css')}}">
	<!-- style css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/style.css')}}">
	<!-- shortcode css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/shortcode.css')}}">
	<!-- responsive css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
	<!-- modernizr css -->
	<script src="{{asset('frontend/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
	<!-- Spinner css -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
</head>

<body>
	<!-- WRAPPER START -->
	<div class="wrapper">

		<!-- Mobile-header-top Start -->
		<div class="mobile-header-top d-block d-md-none">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- header-search-mobile start -->
						<div class="header-search-mobile">
							<div class="table">
								<div class="table-cell">
									<ul>
										<li><a class="search-open" href="#"><i class="zmdi zmdi-search"></i></a></li>
										<li><a href="login.html"><i class="zmdi zmdi-lock"></i></a></li>
										<li><a href="my-account.html"><i class="zmdi zmdi-account"></i></a></li>
										<li><a href="wishlist.html"><i class="zmdi zmdi-favorite"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- header-search-mobile start -->
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile-header-top End -->
		<!-- HEADER-AREA START -->
		<header id="sticky-menu" class="header">
			<div class="header-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 offset-md-4 col-7">
							<div class="logo text-md-center">
								<a href="/"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="" /></a>
							</div>
						</div>
						<div class="col">
							<ul>
								<li>
									<a class="cart-icon" href="#">
										<i class="zmdi zmdi-shopping-cart"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<ul>
								<li>
									<a class="cart-icon" href="wishlist.html">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="col">
							<ul>
								<li>
									<a class="cart-icon" href="{{route('customer.dashboard')}}">
										<i class="zmdi zmdi-account"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- MAIN-MENU START -->
			<div class="menu-toggle hamburger hamburger--emphatic d-none d-md-block">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
			<div class="main-menu  d-none d-md-block">
				<nav>
					<ul>
						<li>
							<a href="/">
								@if(session()->get('lang') == 'arabic') <a>home</a>
								@else <a>الرئيسية</a>
								@endif</a>
						</li>
						<li><a href="shop.html">
								@if(session()->get('lang') == 'arabic') <a>products</a>
								@else <a>المنتجات</a>
								@endif</a>
							<div class="mega-menu menu-scroll">
								<div class="table">
									<div class="table-cell">
										<div class="half-width">
											<ul>
												<li class="menu-title">Roaster</li>
												<li><a href="#">henning koppel</a></li>
											</ul>
										</div>
										<div class="half-width">
											<ul>
												<li class="menu-title">Origin</li>
												<li><a href="#">akiko kuwahata</a></li>
											</ul>
										</div>
										<div class="pb-80"></div>
									</div>
								</div>
							</div>
						</li>
						<li><a href="{{route('home.about')}}">
								@if(session()->get('lang') == 'arabic') <a>about us</a>
								@else <a>عن الموقع</a>
								@endif</a></li>
						<li><a href="{{route('home.contact')}}">
								@if(session()->get('lang') == 'arabic') <a>contact</a>
								@else <a>بيانات الاتصال</a>
								@endif</a></li>
						<li><a href="{{ route('login.from') }}">
								@if(session()->get('lang') == 'arabic') <a>Admin</a>
								@else <a>المدير</a>
								@endif</a></li>
						@if(session()->get('lang') == 'arabic')
						<li class="version"><a href="{{route('lang.english')}}"><i></i><b>عربي</b></a>
						<li>
							@else
						<li class="version"><a href="{{route('lang.arabic')}}"><i></i><b>English</b></a>
						<li>
							@endif
					</ul>
				</nav>
			</div>
			<!-- MAIN-MENU END -->
		</header>
		<!-- HEADER-AREA END -->
		<!-- Mobile-menu start -->
		<div class="mobile-menu-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 d-block d-md-none">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul>
									<li>
										<a href="/">home</a>
									</li>
									<li><a href="shop.html">products</a>
										<div class="mega-menu menu-scroll">
											<div class="table">
												<div class="table-cell">
													<div class="half-width">
														<ul>
															<li class="menu-title">Roaster</li>
															<li><a href="#">henning koppel</a></li>
														</ul>
													</div>
													<div class="half-width">
														<ul>
															<li class="menu-title">Origin</li>
															<li><a href="#">akiko kuwahata</a></li>
														</ul>
													</div>
													<div class="pb-80"></div>
												</div>
											</div>
										</div>
									</li>
									<li><a href="{{route('home.about')}}">about us</a></li>
									<li><a href="{{route('home.contact')}}">contact</a></li>
									<li><a href="{{ route('login.from') }}">Admin</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile-menu end -->
		@yield('content')
		<!-- FOOTER START -->
		<footer>
			<!-- Footer-area start -->
			<div class="footer-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-footer">
								@php
								$contact = DB::table('contacts')->first();
								@endphp
								<h3 class="footer-title  title-border">
									@if(session()->get('lang') == 'arabic') <a>Contact Us</a>
									@else <a>تواصل معنا</a>
									@endif
								</h3>
								<ul class="footer-contact">
									<li>
										<span>
											@if(session()->get('lang') == 'arabic') <a>Address :</a>
											@else <a>العنوان:</a>
											@endif
										</span>
										@if(session()->get('lang') == 'arabic') <a>{{$contact->address_en}}</a>
										@else <a>{{$contact->address_ar}}</a>
										@endif
									</li>
									<li><span>Cell-Phone :</span>{{$contact->phone_number}}</li>
									<li><span>Email :</span>{{$contact->email}}</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6">
							<div class="single-footer">
								<h3 class="footer-title  title-border">
									@if(session()->get('lang') == 'arabic') <a>accounts</a>
									@else <a>الحساب</a>
									@endif
								</h3>
								<ul class="footer-menu">
									<li>
										<a href="#"><i class="zmdi zmdi-dot-circle"></i>
											@if(session()->get('lang') == 'arabic') <a>My Account</a>
											@else <a>حسابي</a>
											@endif
										</a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-dot-circle"></i>
											@if(session()->get('lang') == 'arabic') <a>My Wishlist</a>
											@else <a>قائمة الأمنيات</a>
											@endif
										</a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-dot-circle"></i>
											@if(session()->get('lang') == 'arabic') <a>My Cart</a>
											@else <a>سلة مشترياتي</a>
											@endif
										</a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-dot-circle"></i>
											@if(session()->get('lang') == 'arabic') <a>Check out</a>
											@else <a>إتمام الشراء</a>
											@endif
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-footer">
								<h3 class="footer-title  title-border">your Wishlist</h3>
								<div class="footer-product">
									<div class="row">
										<div class="col-sm-6 col-12">
											<div class="footer-thumb">
												<a href="#"><img src="{{asset('frontend/assets/img/footer/1.jpg')}}" alt="" /></a>
												<div class="footer-thumb-info">
													<p><a href="#">Furniture Product<br>Name</a></p>
													<h4 class="price-3">$ 60.00</h4>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="footer-thumb">
												<a href="#"><img src="{{asset('frontend/assets/img/footer/1.jpg')}}" alt="" /></a>
												<div class="footer-thumb-info">
													<p><a href="#">Furniture Product<br>Name</a></p>
													<h4 class="price-3">$ 60.00</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer-area end -->
			<!-- Copyright-area start -->
			<div class="copyright-area">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="copyright">
								<p class="mb-0">&copy; <a href=" https://themeforest.net/user/codecarnival/portfolio " target="_blank"> CodeCarnival </a> 2021. All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="payment  text-md-end">
								<a href="#"><img src="{{asset('frontend/assets/img/payment/1.png')}}" alt="" /></a>
								<a href="#"><img src="{{asset('frontend/assets/img/payment/2.png')}}" alt="" /></a>
								<a href="#"><img src="{{asset('frontend/assets/img/payment/3.png')}}" alt="" /></a>
								<a href="#"><img src="{{asset('frontend/assets/img/payment/4.png')}}" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright-area start -->
		</footer>
		<!-- FOOTER END -->
	</div>
	<!-- WRAPPER END -->

	<!-- all js here -->
	<!-- jquery latest version -->
	<script src="{{asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
	<!-- bootstrap js -->
	<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!-- jquery.meanmenu js -->
	<script src="{{asset('frontend/assets/js/jquery.meanmenu.js')}}"></script>
	<!-- slick.min js -->
	<script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
	<!-- jquery.treeview js -->
	<script src="{{asset('frontend/assets/js/jquery.treeview.js')}}"></script>
	<!-- lightbox.min js -->
	<script src="{{asset('frontend/assets/js/lightbox.min.js')}}"></script>
	<!-- jquery-ui js -->
	<script src="{{asset('frontend/assets/js/jquery-ui.min.js')}}"></script>
	<!-- jquery.nivo.slider js -->
	<script src="{{asset('frontend/assets/lib/js/jquery.nivo.slider.js')}}"></script>
	<script src="{{asset('frontend/assets/lib/home.js')}}"></script>
	<!-- jquery.nicescroll.min js -->
	<script src="{{asset('frontend/assets/js/jquery.nicescroll.min.js')}}"></script>
	<!-- countdon.min js -->
	<script src="{{asset('frontend/assets/js/countdon.min.js')}}"></script>
	<!-- wow js -->
	<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
	<!-- plugins js -->
	<script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>