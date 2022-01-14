@extends('admin.admin_master')
@section('admin')
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
      <div class="row column1">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>@if(session()->get('lang') == 'arabic') <span>Edit Banner</span>
                  @else <span>تعديل العبارة الترحيبية</span>
                  @endif</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  </div>
               </div>
               <div class="full graph_head">
                  <!-- user profile section -->
                  <form method="post" action="{{route('update.banner')}}">
                     <div class="card-group">
                        <div class="card">
                           <div class="card-body">
                              @csrf
                              <div class="mb-3">
                                 <label class="form-label">First Title</label>
                                 <input type="text" class="form-control" value="{{$banner->banner_title_1_en}}" name="banner_title_1_en">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">Second Title</label>
                                 <input type="text" class="form-control" value="{{$banner->banner_title_2_en}}" name="banner_title_2_en">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">Third Title</label>
                                 <input type="text" class="form-control" value="{{$banner->banner_title_3_en}}" name="banner_title_3_en">
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-body text-right">
                              @csrf
                              <div class="mb-3">
                                 <label class="form-label">العنوان الأول</label>
                                 <input type="text" class="form-control text-right" value="{{$banner->banner_title_1_ar}}" name="banner_title_1_ar">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">العنوان الثاني</label>
                                 <input type="text" class="form-control text-right" value="{{$banner->banner_title_2_ar}}" name="banner_title_2_ar">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">العنوان الثالث</label>
                                 <input type="text" class="form-control text-right" value="{{$banner->banner_title_3_ar}}" name="banner_title_3_ar">
                              </div>
                           </div>
                        </div>
                     </div><br>
                     <div class="d-grid gap-2">
                     @if(session()->get('lang') == 'arabic') <input type="submit" value="Update" class="btn btn-outline-warning">
                  @else <input type="submit" value="تحديث" class="btn btn-outline-warning">
                  @endif
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection