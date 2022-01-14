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
   <title>Admin Panel</title>
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
   <link rel="stylesheet" href="{{asset('backend/assets/css/color_2.css')}}" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap-select.css')}}" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="{{asset('backend/assets/css/perfect-scrollbar.css')}}" />
   <!-- custom css -->
   <link rel="stylesheet" href="{{asset('backend/assets/css/custom.css')}}" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_2">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div class="sidebar_blog_1">
               <div class="sidebar-header">
                  <div class="logo_section">
                     <a href="index.html"><img class="logo_icon img-responsive" src="{{(!empty($user->profile_photo_path))? url('upload/admin_images/'.$user->profile_photo_path):url('upload/admin_images/no_image.jpg')}}" alt="#" /></a>
                  </div>
               </div>
               <div class="sidebar_user_info">
                  <div class="icon_setting"></div>
                  <div class="user_profle_side">
                     <div class="user_img"><img class="img-responsive" src="{{(!empty($user->profile_photo_path))? url('upload/admin_images/'.$user->profile_photo_path):url('upload/admin_images/no_image.jpg')}}" alt="#" /></div>
                     <div class="user_info">
                        <h6>{{\Auth::guard('admin')->user()->name}}</h6>
                        <p><span class="online_animation"></span>
                           @if(session()->get('lang') == 'arabic') <span>Online</span>
                           @else <span>متصل</span>
                           @endif</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sidebar_blog_2">
               <ul class="list-unstyled components">
                  <li><a href="{{route('dashboard')}}"><i class="fa fa-area-chart orange_color"></i>
                        @if(session()->get('lang') == 'arabic') <span>Dashboard</span>
                        @else <span>لوحة التحكم</span></a></li>
                  @endif
                  <li><a href="{{route('admin.homepage')}}"><i class="fa fa-desktop orange_color"></i>
                        @if(session()->get('lang') == 'arabic') <span>Home Page</span>
                        @else <span>الصفحة الرئيسية</span></a></li>
                  @endif
                  <li><a href="{{route('products')}}"><i class="fa fa-coffee orange_color"></i>
                        @if(session()->get('lang') == 'arabic') <span>Products</span>
                        @else <span>المنتجات</span></a></li>
                  @endif
                  <li><a href="{{route('customers')}}"><i class="fa fa-users orange_color"></i>
                        @if(session()->get('lang') == 'arabic') <span>Customers</span>
                        @else <span>العملاء</span></a></li>
                  @endif
                  <li><a href="{{route('admin.social')}}"><i class="fa fa-comment orange_color"></i>
                        @if(session()->get('lang') == 'arabic') <span>Social</span>
                        @else <span>وسائل التواصل</span></a></li>
                  @endif
                  <li><a href="{{route('admin.contact')}}"><i class="fa fa-comments orange_color"></i>
                        @if(session()->get('lang') == 'arabic') <span>Contact</span>
                        @else <span>بيانات الاتصال</span></a></li>
                  @endif
                  <li><a href="{{route('admin.about')}}"><i class="fa fa-info orange_color"></i>
                        @if(session()->get('lang') == 'arabic') <span>About</span>
                        @else <span>عن الموقع</span></a></li>
                  @endif
                  @if(session()->get('lang') == 'arabic')
                  <li class="version"><a href="{{route('lang.english')}}"><i></i><b>عربي</b></a>
                  <li>
                     @else
                  <li class="version"><a href="{{route('lang.arabic')}}"><i></i><b>English</b></a>
                  <li>
                     @endif
               </ul>
            </div>
         </nav>
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                     <div class="logo_section">
                        <a href="dashboard"><img class="img-responsive" src="{{asset('backend/assets/img/logo/logo.png')}}" alt="#" /></a>
                     </div>
                     <div class="right_topbar">
                        <div class="icon_info">
                           <ul class="user_profile_dd">
                              <li>
                                 <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{(!empty($user->profile_photo_path))? rl('upload/admin_images/'.$user->profile_photo_path):url('upload/admin_images/no_image.jpg')}}" alt="#" /><span class="name_user">{{\Auth::guard('admin')->user()->name}}</span></a>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('admin.profile')}}">
                                       @if(session()->get('lang') == 'arabic') <span>My Profile</span></a>
                                    @else <span> حسابي</span></a>
                                    @endif
                                    <a class="dropdown-item" href="{{route('show.password')}}">
                                       @if(session()->get('lang') == 'arabic') <span>Change Password</span></a>
                                    @else <span>تغيير كلمة المرور</span></a>
                                    @endif
                                    <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="fa fa-sign-out"></i>
                                       @if(session()->get('lang') == 'arabic') <span>Log Out</span></a>
                                    @else <span>تسجيل الخروج</span></a>
                                    @endif
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
            <!-- end topbar -->
            @yield('admin')
            <!-- footer -->
            <div class="container-fluid">
               <div class="footer">
                  <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                     Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                  </p>
               </div>
            </div>
         </div>
         <!-- end dashboard inner -->
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
   <!-- owl carousel -->
   <script src="{{asset('backend/assets/js/owl.carousel.js')}}"></script>
   <!-- chart js -->
   <script src="{{asset('backend/assets/js/Chart.min.js')}}"></script>
   <script src="{{asset('backend/assets/js/Chart.bundle.min.js')}}"></script>
   <script src="{{asset('backend/assets/js/utils.js')}}"></script>
   <script src="{{asset('backend/assets/js/analyser.js')}}"></script>
   <!-- nice scrollbar -->
   <script src="{{asset('backend/assets/js/perfect-scrollbar.min.js')}}"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="{{asset('backend/assets/js/custom.js')}}"></script>
   <script src="{{asset('backend/assets/js/chart_custom_style2.js')}}"></script>
</body>

</html>