@extends('admin.admin_master')
@section('admin')
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
                     <h2>@if(session()->get('lang') == 'arabic') <span>Edit About</span>
                        @else <span>تعديل النبذة</span>
                        @endif</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <form method="post" action="{{route('update.about')}}">
                     <div class="card-group">
                        <div class="card">
                           <div class="card-body">
                              @csrf
                              <div class="mb-3">
                                 <label class="form-label">Title</label>
                                 <input type="text" class="form-control" value="{{$about->title_en}}" name="title_en">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">Content</label>
                                 <input type="text" class="form-control" value="{{$about->content_en}}" name="content_en">
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-body text-right">
                              @csrf
                              <div class="mb-3">
                                 <label class="form-label">العنوان </label>
                                 <input type="text" class="form-control text-right" value="{{$about->title_ar}}" name="title_ar">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">المحتوى</label>
                                 <input type="text" class="form-control text-right" value="{{$about->content_ar}}" name="content_ar">
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
   @endsection