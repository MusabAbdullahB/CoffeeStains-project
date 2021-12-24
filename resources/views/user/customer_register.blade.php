@extends('customer.customer_master')
@section('customer')
			<!-- HEADING-BANNER START -->
			<div class="heading-banner-area overlay-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="heading-banner">
								<div class="heading-banner-title">
									<h2>Register</h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li>Register</li>
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
					<form method="post" action="{{route('customer.register.create')}}">	
               @csrf
						<div class="row">
							</div>
							<div class="col-lg-6">
								<div class="customer-login text-left">
									<h4 class="title-1 title-border text-uppercase mb-30">new customer</h4>
									<p class="btn btn text-gray">If you have an account with us, Please login!</p>
									<input type="text" placeholder="Your name here..." name="name">
									<input type="text" placeholder="Email address here..." name="email">
									<input type="password" name="password" placeholder="Password">
									<!--<input type="password" placeholder="Confirm password">-->
									<p class="mb-0">
										<!--<input type="checkbox" id="newsletter" name="newsletter" checked>
										label for="newsletter"><span>Sign up for our newsletter!</span></label>-->
									</p>
									<button type="submit" data-text="regiter" class="button-one submit-button mt-15">register</button>
								</div>					
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- SHOPPING-CART-AREA END -->
@endsection