@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>@if(session()->get('lang') == 'arabic') <span>Home Page</span>
                  @else <span>الصفحة الرئيسية</span>
                  @endif</h2>
            </div>
         </div>
      </div>
      <!-- Banner Edit -->
      <div class="row column1">
         <div class="col-md-2"></div>
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>@if(session()->get('lang') == 'arabic') <span>Edit Banner</span>
                  @else <span>تعديل العبارة الترحيبية</span>
                  @endif</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                     <a class="btn btn-outline-warning" href="{{route('edit.banner')}}">
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
                           <h5 class="card-subtitle mb-2 text-muted">First Title</h5>
                           <p class="card-text">{{$banner->banner_title_1_en}}</p>
                           <h5 class="card-subtitle mb-2 text-muted">Second Title</h5>
                           <p class="card-text">{{$banner->banner_title_2_en}}</p>
                           <h5 class="card-subtitle mb-2 text-muted">Third Title</h5>
                           <p class="card-text">{{$banner->banner_title_3_en}}</p>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-body text-right">
                           <h4 class="card-title mb-2 text-muted">عربي</h4>
                           <h5 class="card-subtitle mb-2 text-muted">العنوان الأول</h5>
                           <p class="card-text">{{$banner->banner_title_1_ar}}</p>
                           <h5 class="card-subtitle mb-2 text-muted">العنوان الثاني</h5>
                           <p class="card-text">{{$banner->banner_title_2_ar}}</p>
                           <h5 class="card-subtitle mb-2 text-muted">العنوان الثالث</h5>
                           <p class="card-text">{{$banner->banner_title_3_ar}}</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection