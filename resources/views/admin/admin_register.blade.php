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
   <title>Login</title>
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

<div class="center">
   <img width="210" src="{{asset('backend/assets/img/logo/logo.png')}}" alt="#" />
</div>

<body class="inner_page login">
   <div class="full_container">
      <div class="container">
         <div class="center verticle_center full_height">
            <div class="login_section">
               <div class="login_form">
                  @if(session()->get('lang') == 'arabic')
                  <a class="version"><a href="{{route('lang.english')}}"><b>عربي</b></a>
                     @else
                     <a class="version"><a href="{{route('lang.arabic')}}"><b>English</b></a>
                        @endif
                        <form class="d-block" method="post" action="{{ route('admin.register.create') }}">
                           @csrf
                           <div class="field">
                              <label class="label_field">
                                 @if(session()->get('lang') == 'arabic') <span>Username</span>
                                 @else <span>اسم المستخدم</span>
                                 @endif
                              </label>
                              @if(session()->get('lang') == 'arabic')
                              <input type="text" name="name" placeholder="Username">
                              @else
                              <input type="text" name="name" placeholder="اسم المستخدم">
                              @endif
                           </div>
                           <div class="field">
                              <label class="label_field">
                                 @if(session()->get('lang') == 'arabic') <span>Email Address</span>
                                 @else <span>الايميل</span>
                                 @endif
                              </label>
                              @if(session()->get('lang') == 'arabic')
                              <input type="text" name="email" placeholder="Email Address">
                              @else
                              <input type="text" name="email" placeholder="الايميل">
                              @endif
                           </div>
                           <div class="field">
                              <label class="label_field">
                                 @if(session()->get('lang') == 'arabic') <span>Password</span>
                                 @else <span>كلمة المرور</span>
                                 @endif
                              </label>
                              @if(session()->get('lang') == 'arabic')
                              <input type="text" name="Password" placeholder="Password">
                              @else
                              <input type="text" name="Password" placeholder="كلمة المرور">
                              @endif
                           </div>
                           <div class="text-center">
                              <button type="submit" class="btn btn-primary btn-block enter-btn">
                                 @if(session()->get('lang') == 'arabic') <span>Signup</span>
                                 @else <span>التسجيل</span>
                                 @endif
                              </button>
                           </div>

                           <p class="sign-in text-center">
                              @if(session()->get('lang') == 'arabic') <span>Already have an Account?</span>
                              @else <span>هل سجلت مسبقًا؟</span>
                              @endif<a href="{{ route('login.from') }}">
                                 @if(session()->get('lang') == 'arabic') <span>Login</span>
                                 @else <span>الدخول</span>
                                 @endif</a></p>
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