@extends('customer.customer_master')
@section('customer')
<!-- HEADING-BANNER START -->
<div class="heading-banner-area overlay-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-banner">
					<div class="heading-banner-title">
						<h2>Login</h2>
					</div>
					<div class="breadcumbs pb-15">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Login</li>
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
		<form action="{{route('customer.dashboard')}}">
			<div class="row">
				<div class="col-lg-6">
					<div class="customer-login text-left">
						<h4 class="title-1 title-border text-uppercase mb-30">Customers</h4>
						<p class="text-gray">If you have an account with us, Please login!</p>
						<input type="text" placeholder="Email here..." name="email">
						<input type="password" placeholder="Password" type="password">
						<p><a href="{{route('customer.register')}}" class="text-gray">Register</a>
							<a href="#" style="float:right" class="text-gray">Forget your password?</a>
						</p>
						<button type="submit" data-text="login" class="button-one submit-button mt-15">login</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- SHOPPING-CART-AREA END -->
@endsection