@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Charts</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30 yellow_bg">
               <div class="couter_icon">
                  <div>
                     <i class="fa fa-user"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">2500</p>
                     <p class="head_couter">Welcome</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30 blue1_bg">
               <div class="couter_icon">
                  <div>
                     <i class="fa fa-clock-o"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">123.50</p>
                     <p class="head_couter">Average Time</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30 green_bg">
               <div class="couter_icon">
                  <div>
                     <i class="fa fa-cloud-download"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">1,805</p>
                     <p class="head_couter">Collections</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30 red_bg">
               <div class="couter_icon">
                  <div>
                     <i class="fa fa-comments-o"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">54</p>
                     <p class="head_couter">Comments</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- graph -->
      <div class="row column2 graph margin_bottom_30">
         <div class="col-md-l2 col-lg-12">
            <div class="white_shd full">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Extra Area Chart</h2>
                  </div>
               </div>
               <div class="full graph_revenue">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="content">
                           <div class="area_chart">
                              <div class="row">
                                 <div class="col-md-6">
                                    <canvas id="chart-2"></canvas>
                                 </div>
                                 <div class="col-md-6">
                                    <canvas id="chart-1"></canvas>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end graph -->
      <div class="row column3">
         @endsection