@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>@if(session()->get('lang') == 'arabic') <span>Charts</span>
                  @else <span>إحصائيات</span>
                  @endif</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-6 col-lg-4">
            <div class="full counter_section margin_bottom_30 yellow_bg">
               <div class="couter_icon">
                  <div>
                     <i class="fa fa-user"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">{{count($admins)}}</p>
                     <p class="head_couter">@if(session()->get('lang') == 'arabic') <span>Admins</span>
                        @else <span>مدراء</span>
                        @endif</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="full counter_section margin_bottom_30 blue1_bg">
               <div class="couter_icon">
                  <div>
                     <i class="fa fa-users"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">{{count($customers)}}</p>
                     <p class="head_couter">@if(session()->get('lang') == 'arabic') <span>Customers</span>
                        @else <span>عملاء</span>
                        @endif</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-4">
            <div class="full counter_section margin_bottom_30 green_bg">
               <div class="couter_icon">
                  <div>
                     <i class="fa fa-coffee"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">{{count($products)}}</p>
                     <p class="head_couter">@if(session()->get('lang') == 'arabic') <span>Products</span>
                        @else <span>منتجات</span>
                        @endif</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end graph -->
      <div class="row column3">
         @endsection