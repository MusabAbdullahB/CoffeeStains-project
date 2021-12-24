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
                     <h2>Edit Hero</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <!-- user profile section -->
                     <div class="col-md-12">
                        <div class="full dis_flex center_text">
                           <form method="get" action="{{route('update.hero')}}" enctype="multipart/form-data">
                              @csrf
                              <div class="hero_img">
                                 <img style="width:122px; height:80px" src="{{(!empty($hero->hero_photo_path))? rl('upload/hero_images/'.$user->hero_photo_path):url('upload/hero_images/no_image.jpg')}}" alt="#" />
                              </div><br>
                              <div class="mb-3">
                                 <input class="form-control form-control-sm" id="formFileSm" type="file">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">First Title</label>
                                 <input type="text" class="form-control" value="{{$hero->slider_title_1}}" name="slider_title_1">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">Second Title</label>
                                 <input type="text" class="form-control" value="{{$hero->slider_title_2}}" name="slider_title_2">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">Third Title</label>
                                 <input type="text" class="form-control" value="{{$hero->slider_title_3}}" name="slider_title_3">
                              </div>
                              <a type="submit" href="{{route('update.hero')}}" class="btn btn-outline-warning">Update</a>
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