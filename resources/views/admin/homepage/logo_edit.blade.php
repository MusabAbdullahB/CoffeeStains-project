@extends('admin.admin_master')
@section('admin')
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Home Page</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Edit Logo</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <!-- user profile section -->
                     <div class="col-md-12">
                        <div class="full dis_flex center_text">
                           <form method="get" action="{{route('update.logo')}}" enctype="multipart/form-data">
                              @csrf
                              <div class="logo_img">
                                 <img style="width:122px; height:80px" src="{{(!empty($logo->logo_photo_path))? rl('upload/logo_images/'.$user->logo_photo_path):url('upload/logo_images/no_image.jpg')}}" alt="#" />
                              </div><br>
                              <div class="mb-3">
                                 <input class="form-control form-control-sm" id="formFileSm" type="file">
                              </div>
                              <a type="submit" href="{{route('update.logo')}}" class="btn btn-outline-warning">Update</a>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endsection