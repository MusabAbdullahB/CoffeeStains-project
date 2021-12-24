@extends('customer.customer_master')
@section('customer')
<!-- HEADING-BANNER START -->
<div class="heading-banner-area overlay-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-banner">
					<div class="heading-banner-title">
						<h2>Registration</h2>
					</div>
					<div class="breadcumbs pb-15">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Registration</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- HEADING-BANNER END -->
<!-- SHOPPING-CART-AREA START -->
<div class="login-area  pt-80 pb-80">
	<div class="container">
		<form action="{{route('customer_login.from')}}">
			<div class="row">
				<div class="col-lg-6">
					<div class="customer-login text-left">
						<h4 class="title-1 title-border text-uppercase mb-30">new customers</h4>
						<input type="text" placeholder="Your name here..." name="name">
						<input type="text" placeholder="Email address here..." name="email">
						<input type="password" placeholder="Password" name="password">
						<!--<input type="password" placeholder="Confirm password">-->
						<button type="submit" data-text="regiter" class="button-one submit-button mt-15">regiter</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- SHOPPING-CART-AREA END -->
@endsection