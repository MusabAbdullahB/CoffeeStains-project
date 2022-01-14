@extends('admin.admin_master')
@section('admin')
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>@if(session()->get('lang') == 'arabic') <span>Social Media</span>
                  @else <span>وسائل التواصل</span>
                  @endif</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>@if(session()->get('lang') == 'arabic') <span>Edit Social</span>
                        @else <span>تعديل وسائل التواصل</span>
                        @endif</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full dis_flex center_text">
                           <form method="post" action="{{route('update.social')}}">
                              @csrf
                              <div class="mb-3">
                                 <label class="form-label">
                                    @if(session()->get('lang') == 'arabic') <span>Twitter</span>
                                    @else <span>تويتر</span>
                                    @endif
                                 </label>
                                 <input type="text" class="form-control" value="{{$social->twitter}}" name="twitter">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">
                                    @if(session()->get('lang') == 'arabic') <span>Facebook</span>
                                    @else <span>فيسبوك</span>
                                    @endif
                                 </label>
                                 <input type="text" class="form-control" value="{{$social->facebook}}" name="facebook">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">
                                    @if(session()->get('lang') == 'arabic') <span>Instagram</span>
                                    @else <span>انستغرام</span>
                                    @endif
                                 </label>
                                 <input type="text" class="form-control" value="{{$social->instagram}}" name="instagram">
                              </div>
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
      </div>
   </div>
   @endsection