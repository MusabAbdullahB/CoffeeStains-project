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
			<div class="pt-80 pb-80" class="customer_login.from">
        <!--@if(Session::has('error'))
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong></strong> {{session::get('error')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif-->
                  <form action="#" class="d-block" method="get">
                     @csrf
				<div class="container">
					<form action="#">	
						<div class="row">
							<div class="col-lg-6">
								<div class="customer-login text-left">
									<h4 class="title-1 title-border text-uppercase mb-30">Customers</h4>
									<p class="btn btn text-gray">If you have an account with us, Please login!</p>
									<input type="text" placeholder="Email here..." name="email">
									<input type="password" name="password" placeholder="Password">
									<a href="" class="btn btn text-gray">Forget your password?</a>
                                    <a class="btn btn text-gray" class="registration" href="{{route('customer.register')}}">Create new account</a><br>
									<button type="submit" data-text="login" class="button-one submit-button mt-15" href="{{route('customer.login')}}">login</button>
								</div>					
							</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- SHOPPING-CART-AREA END -->
@endsection