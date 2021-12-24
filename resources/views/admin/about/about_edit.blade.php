@extends('admin.admin_master')
@section('admin')
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>About</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Edit About</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <!-- user profile section -->
                     <div class="col-md-12">
                        <div class="full dis_flex center_text">
                           <form method="post" action="{{route('update.about')}}">
                              @csrf
                              <div class="mb-3">
                                 <label class="form-label">Title</label>
                                 <input type="text" class="form-control" value="{{$about->title}}" name="address">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">Content</label>
                                 <input type="text" class="form-control" value="{{$about->content}}" name="phone_number" rows="3">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">Picture</label>
                                 <div class="about_img">
                                    <img style="width:300px; height:200px" src="{{(!empty($about->about_photo_path))? url('upload/about_images/'.$user->about_photo_path):url('upload/about_images/no_image.jpg')}}" alt="#" />
                                 </div>
                                 <div class="mb-3">
                                    <label for="formFileSm" class="form-label"></label>
                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                 </div>
                              </div>
                              <a type="submit" href="{{route('update.about')}}" class="btn btn-outline-warning">Update</a>
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