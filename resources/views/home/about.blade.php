@extends('home.home_master')
@section('content')
<!-- HEADING-BANNER START -->
<div class="heading-banner-area overlay-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-banner">
					<div class="heading-banner-title">
						<h2>About Us</h2>
					</div>
					<div class="breadcumbs pb-15">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>About Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- HEADING-BANNER END -->
<!-- ABOUT-US-AREA START -->
<div class="about-us-area  pt-80 pb-80">
	<div class="container">
		<div class="about-us bg-white">
			<div class="row">
				<div class="col-lg-6">
					<div class="about-photo">
						<img src="{{asset('frontend/assets/img/bg/about.jpg')}}" alt="" />
					</div>
				</div>
				<div class="col-lg-6">
				@php
		$about = DB::table('abouts')->first();
		@endphp
					<div class="about-brief bg-dark-white">
						<h4 class="title-1 title-border text-uppercase mb-30">{{$about->title}}</h4>
						<p>{{$about->content}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ABOUT-US-AREA END -->
<!-- TEAM-MEMBER-AREA END -->
<div class="team-member-area pb-80">
	<div class="container">
		<!-- Section-title start -->
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h2 class="title-border">Team Member</h2>
				</div>
			</div>
		</div>
		@endsection