@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>About</h2>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row column1">
   <div class="col-md-12">
      <div class="white_shd full margin_bottom_30">
         <div class="full graph_head">
            <div class="heading1 margin_0">
               <h2>About Details</h2>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
               <a href="{{route('edit.about')}}" type="button" class="btn btn-outline-warning">Edit</a>
            </div>
         </div>
         <div class="full graph_head">
            <h6 class="float-start">Title</h6>
            <p class="card-text">{{$about->title}}</p>
            <h6 class="float-start">Content</h6>
            <p class="card-text">{{$about->content}}</p>
            <h6 class="float-start">Picture</h6>
            <div class="about_img">
               <img style="width:300px; height:200px" src="{{(!empty($about->about_photo_path))? url('upload/about_images/'.$user->about_photo_path):url('upload/about_images/no_image.jpg')}}" alt="#" />
            </div>
         </div>
      </div>
   </div>
</div>
@endsection