@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Profile</h2>
            </div>
         </div>
      </div>
      <!-- row -->
      <div class="row column1">
         <div class="col-md-2"></div>
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>User profile</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                     <a type="button" class="btn btn-outline-warning" href="{{route('profile.edit')}}">Edit</a>
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <!-- user profile section -->
                     <!-- profile image -->
                     <div class="col-lg-12">
                        <div class="full dis_flex center_text">
                           <div class="profile_img"><img width="180" class="rounded-circle" src="{{(!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/user_images/no_image.jpg')}}" alt="#" /></div>
                           <div class="profile_contant">
                              <div class="contact_inner">
                                 <h3>{{\Auth::guard('admin')->user()->name}}</h3>
                                 <ul class="list-unstyled">
                                    <li>{{\Auth::guard('admin')->user()->email}}</li>
                                    <!--<li><i class="fa fa-phone"></i> : 987 654 3210</li>-->
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-2"></div>
      </div>
      <!-- end row -->
   </div>
   @endsection