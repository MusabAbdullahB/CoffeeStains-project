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
                        @if(Session::has('error'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                           <strong></strong> {{session::get('error')}}
                        </div>
                        @endif
                        <form action="{{route('admin.login')}}" class="d-block" method="get">
                           @csrf
                           <fieldset>
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
                                 <input type="password" name="password" placeholder="Password">
                                 @else
                                 <input type="password" name="password" placeholder="كلمة المرور">
                                 @endif
                              </div>
                              <div class="field">
                                 <label class="label_field hidden">hidden label</label>
                                 <label class="form-check-label"><input type="checkbox" class="form-check-input">
                                    @if(session()->get('lang') == 'arabic') <span>Remember Me</span>
                                    @else <span>تذكرني</span>
                                    @endif
                                 </label>
                                 <a class="forgot" href="">
                                    @if(session()->get('lang') == 'arabic') <span>Forgotten Password?</span>
                                    @else <span>نسيت كلمة المرور؟</span>
                                    @endif
                                 </a>
                              </div>
                              <div class="field">
                                 <label class="label_field hidden">hidden label</label>
                                 <button type="submit" class="btn btn-primary enter-btn" href="{{route('admin.login')}}">
                                    @if(session()->get('lang') == 'arabic') <span>Log In</span>
                                    @else <span>الدخول</span>
                                    @endif
                                 </button>
                                 <a class="btn btn-primary enter-btn" class="registration" href="{{route('admin.register')}}">
                                    @if(session()->get('lang') == 'arabic') <span>Create new account</span>
                                    @else <span>انشاء حساب جديد</span>
                                    @endif</a>
                              </div>

                           </fieldset>
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