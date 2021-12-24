<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Admin Panel Login</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="{{asset('backend/assets/images/fevicon.png')}}" type="image/png" />
   <!-- bootstrap css -->
   <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}" />
   <!-- site css -->
   <link rel="stylesheet" href="{{asset('backend/assets/style.css')}}" />
   <!-- responsive css -->
   <link rel="stylesheet" href="{{asset('backend/assets/css/responsive.css')}}" />
   <!-- color css -->
   <link rel="stylesheet" href="{{asset('backend/assets/css/colors.css')}}" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap-select.css')}}" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="{{asset('backend/assets/css/perfect-scrollbar.css')}}" />
   <!-- custom css -->
   <link rel="stylesheet" href="{{asset('backend/assets/css/custom.css')}}" />
   <!-- calendar file css -->
   <link rel="stylesheet" href="{{asset('backend/assets/js/semantic.min.css')}}" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="inner_page login">
   <div class="full_container">
      <div class="container">
         <div class="center verticle_center full_height">
            <div class="login_section">
               <div class="logo_login">
                  <div class="center">
                     <img width="210" src="{{asset('backend/assets/images/logo/logo.png')}}" alt="#" />
                  </div>
               </div>
               <div class="login_form">
                  <form class="d-block" method="post" action="{{ route('admin.register.create') }}">
                     @csrf
                     <div class="field">
                        <label class="label_field">Username</label>
                        <input type="text" name="name" placeholder="Username">
                     </div>
                     <div class="field">
                        <label class="label_field">Email Address</label>
                        <input type="email" name="email" placeholder="E-mail">
                     </div>
                     <div class="field">
                        <label class="label_field">Password</label>
                        <input type="password" name="password" placeholder="Password">
                     </div>

                     <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block enter-btn">Signup</button>
                     </div>

                     <p class="sign-in text-center">Already have an Account?<a href="{{ route('login.from') }}"> Login</a></p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('backend/assets/js/popper.min.js')}}"></script>
   <script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
   <!-- wow animation -->
   <script src="{{asset('backend/assets/js/animate.js')}}"></script>
   <!-- select country -->
   <script src="{{asset('backend/assets/js/bootstrap-select.js')}}"></script>
   <!-- nice scrollbar -->
   <script src="{{asset('backend/assets/js/perfect-scrollbar.min.js')}}"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="{{asset('backend/assets/js/custom.js"></script>
   </body>
</html>