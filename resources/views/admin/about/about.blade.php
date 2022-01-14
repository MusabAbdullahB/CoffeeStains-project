@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>@if(session()->get('lang') == 'arabic') <span>About</span>
                  @else <span>نبذة</span>
                  @endif</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>@if(session()->get('lang') == 'arabic') <span>About Details</span>
                        @else <span>تفاصل النبذة</span>
                        @endif</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                     <a class="btn btn-outline-warning" href="{{route('edit.about')}}">
                        @if(session()->get('lang') == 'arabic') <span>Edit</span>
                        @else <span>تعديل</span>
                     @endif</a>
                  </div>
               </div>
               <div class="full graph_head">
                  @if(Session::has('success'))
                  <div class="alert alert-success" role="alert">
                     <strong></strong> {{session::get('success')}}
                  </div>
                  @endif
                  <div class="card-group">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title mb-2 text-muted">English</h4>
                           <h5 class="card-subtitle mb-2 text-muted">Title</h5>
                           <p class="card-text">{{$about->title_en}}</p>
                           <h5 class="card-subtitle mb-2 text-muted">Content</h5>
                           <p class="card-text">{{$about->content_en}}</p>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-body text-right">
                           <h4 class="card-title mb-2 text-muted">عربي</h4>
                           <h5 class="card-subtitle mb-2 text-muted">العنوان</h5>
                           <p class="card-text">{{$about->title_ar}}</p>
                           <h5 class="card-subtitle mb-2 text-muted">المحتوى</h5>
                           <p class="card-text">{{$about->content_ar}}</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endsection