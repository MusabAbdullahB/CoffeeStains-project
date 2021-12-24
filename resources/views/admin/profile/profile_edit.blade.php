@extends('admin.admin_master')
@section('admin')
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Profile</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Edit Profile</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <!-- user profile section -->
                     <div class="col-md-12">
                        <div class="full dis_flex center_text">
                           <div class="profile_img"><img width="180" class="rounded-circle" src="{{(!empty($editData->profile_photo_path))? rl('upload/user_images/'.$user->profile_photo_path):url('upload/user_images/no_image.jpg')}}" alt="#" /></div>
                           <form>
                              @csrf
                              <div class="mb-3">
                                 <label class="form-label">Username</label>
                                 <input type="text" class="form-control" value="{{$editData->name}}" name="name">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">Email</label>
                                 <input type="email" class="form-control" value="{{$editData->email}}" name="email">
                              </div>
                              <!--   <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                  </div> -->
                              <div class="mb-3">
                                 <label for="formFileSm" class="form-label">Profile Picture</label>
                                 <input class="form-control form-control-sm" id="formFileSm" type="file">
                              </div>
                              <a type="submit" method="post" href="{{route('profile.update',$editData->id)}}" enctype="multipart/form-data" class="btn btn-outline-warning">Update</a>
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