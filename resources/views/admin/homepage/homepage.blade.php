@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Home Page</h2>
            </div>
         </div>
      </div>
      <!-- row -->
      <!-- Logo Edit -->
      <div class="row column1">
         <div class="col-md-2"></div>
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Edit Logo</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                     <a class="btn btn-outline-warning" href="{{route('edit.logo')}}">Edit</a>
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <form>
                        @csrf
                        <div class="logo_img">
                           <img style="width:122px; height:80px" src="{{(!empty($logo->logo_photo_path))? rl('upload/logo_images/'.$user->logo_photo_path):url('upload/logo_images/no_image.png')}}" alt="#" />
                        </div><br>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Hero Edit -->
      <div class="row column1">
         <div class="col-md-2"></div>
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Edit Hero</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                     <a class="btn btn-outline-warning" href="{{route('edit.hero')}}">Edit</a>
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <form>
                        @csrf
                        <div class="hero_img">
                           <img style="width:122px; height:80px" src="{{(!empty($hero->hero_photo_path))? rl('upload/hero_images/'.$user->hero_photo_path):url('upload/hero_images/no_image.jpg')}}" alt="#" />
                        </div><br>
                        <div class="mb-3">
                           <h4>First Title</h4>
                           <ul>{{$hero->slider_title_1}}</ul>
                        </div>
                        <div class="mb-3">
                           <h4>Second Title</h4>
                           <ul>{{$hero->slider_title_2}}</ul>
                        </div>
                        <div class="mb-3">
                           <h4>Third Title</h4>
                           <ul>{{$hero->slider_title_3}}</ul>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endsection