@extends('home.home_master')
@section('content')
<!-- SLIDER-BANNER-AREA START -->
<section class="slider-banner-area clearfix">
	<!-- Sidebar-social-media start -->
	<div class="sidebar-social d-none d-md-block">
		@php
		$social = DB::table('socials')->first();
		@endphp
		<div class="table">
			<div class="table-cell">
				<ul>
					<li><a href="{{$social->twitter}}" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
					<li><a href="{{$social->facebook}}" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
					<li><a href="{{$social->instagram}}" target="_blank" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Banner-area start -->
	<div class="slider-area">
		@php
		$banner = DB::table('banners')->first();
		@endphp
		<div class="bend niceties preview-2">
			<div id="ensign-nivoslider" class="slides">
				<img style="width:1220px; height:800px" src="{{asset('frontend/assets/img/slider/slider.jpg')}}" alt="" title="#slider-direction-1" />
			</div>
			<div id="slider-direction-1" class="t-cn slider-direction">
				<div class="slider-content t-lfl s-tb slider-1">
					<div class="title-container s-tb-c title-compress">
						<div class="layer-1">
							<div>
								<h2 class="slider-title3 text-uppercase mb-0">
									@if(session()->get('lang') == 'arabic') {{$banner->banner_title_1_en}}
									@else {{$banner->banner_title_1_ar}}
									@endif
								</h2>
							</div>
							<div>
								<h2 class="slider-title1 text-uppercase mb-0">
									@if(session()->get('lang') == 'arabic') {{$banner->banner_title_2_en}}
									@else {{$banner->banner_title_2_ar}}
									@endif</h2>
							</div>
							<div>
								<h3 class="slider-title2 text-uppercase">
									@if(session()->get('lang') == 'arabic') {{$banner->banner_title_3_en}}
									@else {{$banner->banner_title_3_ar}}
									@endif
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Sidebar-social-media start -->
	<div class="sidebar-account d-none d-md-block">
		<div class="table">
			<div class="table-cell">
			</div>
		</div>
	</div>
	<!-- Sidebar-social-media start -->
</section>
<!-- End Slider-section -->
<!-- sidebar-search Start -->
<div class="sidebar-search animated slideOutUp">
	<div class="table">
		<div class="table-cell">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2 p-0">
						<div class="search-form-wrap">
							<button class="close-search"><i class="zmdi zmdi-close"></i></button>
							<form action="#">
								<input type="text" placeholder="Search here..." />
								<button class="search-button" type="submit">
									<i class="zmdi zmdi-search"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- sidebar-search End -->
<!-- PRODUCT-AREA START -->
<div class="product-area pt-80 pb-35">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h2 class="title-border">
						@if(session()->get('lang') == 'arabic') <span>New Arrivals</span>
						@else <span>اخر الإضافات</span>
						@endif</h2>
				</div>
				<div class="product-slider style-1 arrow-left-right">
					<!-- Single-product start -->
					@php
					$product = DB::table('products')->orderBy('id', 'ASC')->get();
					@endphp
					@foreach($product as $row)
					<div class="single-product">
						<div class="product-img">
							<span class="pro-label new-label">
								@if(session()->get('lang') == 'arabic') <span>new</span>
								@else <span>جديد</span>
								@endif
							</span>
							<div class="product_img">
							</div>
							<a href="single-product.html">
								@if($row->category == 1)
								<img width="180" src="{{asset('/upload/product_images/coffee_default.png')}}">
								@elseif($row->category == 2)
								<img width="180" src="{{asset('/upload/product_images/cup_default.png')}}">
								@elseif($row->category == 3)
								<img width="180" src="{{asset('/upload/product_images/tool_default.png')}}">
								@endif
							</a>
							<div class="product-action clearfix">
								<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">
										@if(session()->get('lang') == 'arabic') <span>{{$row->name_en}}</span>
										@else <span>{{$row->name_ar}}</span>
										@endif
									</a></h4>
								<p class="floatright hidden-sm d-none d-md-block">
									@if($row->category == 1)
									@if(session()->get('lang') == 'arabic') <a>Coffee</a>
									@else <a>قهوة</a>
									@endif
									@elseif($row->category == 2)
									@if(session()->get('lang') == 'arabic') <a>Cups</a>
									@else <a>أكواب</a>
									@endif
									@elseif($row->category == 3)
									@if(session()->get('lang') == 'arabic') <a>Tools</a>
									@else <a>أدوات</a>
									@endif
									@endif
								</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">
									@if(session()->get('lang') == 'arabic') <span>{{$row->price}} SR</span>
									@else <span>ريال {{$row->price}}</span>
									@endif
								</span>
							</div>
						</div>
					</div>
					@endforeach
					<!-- Single-product end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- PRODUCT-AREA END -->
<!-- COFFEE-AREA START -->
<div class="product-area pt-80 pb-35">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h2 class="title-border">
						@if(session()->get('lang') == 'arabic') <span>Coffee</span>
						@else <span>القهوة</span>
						@endif</h2>
				</div>
				<div class="product-slider style-1 arrow-left-right">
					<!-- Single-product start -->
					@php
					$product = DB::table('products')->where('category', '1')->get();
					@endphp
					@foreach($product as $row)
					<div class="single-product">
						<div class="product-img">
							<div class="product_img">
							</div>
							<a href="single-product.html">
								@if($row->category == 1)
								<img width="180" src="{{asset('/upload/product_images/coffee_default.png')}}">
								@elseif($row->category == 2)
								<img width="180" src="{{asset('/upload/product_images/cup_default.png')}}">
								@elseif($row->category == 3)
								<img width="180" src="{{asset('/upload/product_images/tool_default.png')}}">
								@endif
							</a>
							<div class="product-action clearfix">
								<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">
										@if(session()->get('lang') == 'arabic') <span>{{$row->name_en}}</span>
										@else <span>{{$row->name_ar}}</span>
										@endif
									</a></h4>
								<p class="floatright hidden-sm d-none d-md-block">
									@if($row->category == 1)
									@if(session()->get('lang') == 'arabic') <a>Coffee</a>
									@else <a>قهوة</a>
									@endif
									@elseif($row->category == 2)
									@if(session()->get('lang') == 'arabic') <a>Cups</a>
									@else <a>أكواب</a>
									@endif
									@elseif($row->category == 3)
									@if(session()->get('lang') == 'arabic') <a>Tools</a>
									@else <a>أدوات</a>
									@endif
									@endif
								</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">
									@if(session()->get('lang') == 'arabic') <span>{{$row->price}} SR</span>
									@else <span>ريال {{$row->price}}</span>
									@endif
								</span>
							</div>
						</div>
					</div>
					@endforeach
					<!-- Single-product end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- COFFEE-ONLINE-AREA END -->
<!-- CUP-AREA START -->
<div class="product-area pt-80 pb-35">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h2 class="title-border">
						@if(session()->get('lang') == 'arabic') <span>Cups</span>
						@else <span>الأكواب</span>
						@endif</h2>
				</div>
				<div class="product-slider style-1 arrow-left-right">
					<!-- Single-product start -->
					@php
					$product = DB::table('products')->where('category', '2')->get();
					@endphp
					@foreach($product as $row)
					<div class="single-product">
						<div class="product-img">
							<div class="product_img">
							</div>
							<a href="single-product.html">
								@if($row->category == 1)
								<img width="180" src="{{asset('/upload/product_images/coffee_default.png')}}">
								@elseif($row->category == 2)
								<img width="180" src="{{asset('/upload/product_images/cup_default.png')}}">
								@elseif($row->category == 3)
								<img width="180" src="{{asset('/upload/product_images/tool_default.png')}}">
								@endif
							</a>
							<div class="product-action clearfix">
								<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">
										@if(session()->get('lang') == 'arabic') <span>{{$row->name_en}}</span>
										@else <span>{{$row->name_ar}}</span>
										@endif
									</a></h4>
								<p class="floatright hidden-sm d-none d-md-block">
									@if($row->category == 1)
									@if(session()->get('lang') == 'arabic') <a>Coffee</a>
									@else <a>قهوة</a>
									@endif
									@elseif($row->category == 2)
									@if(session()->get('lang') == 'arabic') <a>Cups</a>
									@else <a>أكواب</a>
									@endif
									@elseif($row->category == 3)
									@if(session()->get('lang') == 'arabic') <a>Tools</a>
									@else <a>أدوات</a>
									@endif
									@endif
								</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">
									@if(session()->get('lang') == 'arabic') <span>{{$row->price}} SR</span>
									@else <span>ريال {{$row->price}}</span>
									@endif
								</span>
							</div>
						</div>
					</div>
					@endforeach
					<!-- Single-product end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- CUP-ONLINE-AREA END -->
<!-- TOOLS-AREA START -->
<div class="product-area pt-80 pb-35">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h2 class="title-border">
						@if(session()->get('lang') == 'arabic') <span>Tools</span>
						@else <span>الأدوات</span>
						@endif</h2>
				</div>
				<div class="product-slider style-1 arrow-left-right">
					<!-- Single-product start -->
					@php
					$product = DB::table('products')->where('category', '3')->get();
					@endphp
					@foreach($product as $row)
					<div class="single-product">
						<div class="product-img">
							<div class="product_img">
							</div>
							<a href="single-product.html">
								@if($row->category == 1)
								<img width="180" src="{{asset('/upload/product_images/coffee_default.png')}}">
								@elseif($row->category == 2)
								<img width="180" src="{{asset('/upload/product_images/cup_default.png')}}">
								@elseif($row->category == 3)
								<img width="180" src="{{asset('/upload/product_images/tool_default.png')}}">
								@endif
							</a>
							<div class="product-action clearfix">
								<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">
										@if(session()->get('lang') == 'arabic') <span>{{$row->name_en}}</span>
										@else <span>{{$row->name_ar}}</span>
										@endif
									</a></h4>
								<p class="floatright hidden-sm d-none d-md-block">
									@if($row->category == 1)
									@if(session()->get('lang') == 'arabic') <a>Coffee</a>
									@else <a>قهوة</a>
									@endif
									@elseif($row->category == 2)
									@if(session()->get('lang') == 'arabic') <a>Cups</a>
									@else <a>أكواب</a>
									@endif
									@elseif($row->category == 3)
									@if(session()->get('lang') == 'arabic') <a>Tools</a>
									@else <a>أدوات</a>
									@endif
									@endif
								</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">
									@if(session()->get('lang') == 'arabic') <span>{{$row->price}} SR</span>
									@else <span>ريال {{$row->price}}</span>
									@endif
								</span>
							</div>
						</div>
					</div>
					@endforeach
					<!-- Single-product end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- TOOLS-ONLINE-AREA END -->
@endsection