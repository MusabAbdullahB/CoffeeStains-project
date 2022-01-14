@extends('admin.admin_master')
@section('admin')
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>@if(session()->get('lang') == 'arabic') <span>Profile</span>
                  @else <span>الملف الشخصي</span>
                  @endif</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>@if(session()->get('lang') == 'arabic') <span>change Password</span>
                        @else <span>تغيير كلمة المرور</span>
                        @endif</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <!-- user profile section -->
                     <div class="col-md-12">
                        <div class="full dis_flex center_text">
                           <form method="post" action="{{route('change.password')}}">
                              @csrf
                              <div class="form-group">
                                 <label class="form-label">
                                    @if(session()->get('lang') == 'arabic') <span>Current Password</span>
                                    @else <span>كلمة المرور الحالية</span>
                                    @endif
                                 </label>
                                 <input type="password" class="form-control" id="current_password" name="oldpassword">
                                 @error('oldpassword')
                                 <span class="test-center">{{$message}}</span>
                                 @enderror
                              </div>
                              <div class="form-group">
                                 <label class="form-label">
                                    @if(session()->get('lang') == 'arabic') <span>New Password</span>
                                    @else <span>كلمة المرور الجديدة</span>
                                    @endif
                                 </label>
                                 <input type="password" class="form-control" id="password" name="password">
                                 @error('password')
                                 <span class="test-center">{{$message}}</span>
                                 @enderror
                              </div>
                              <div class="form-group">
                                 <label class="form-label">
                                    @if(session()->get('lang') == 'arabic') <span>Confirm Password</span>
                                    @else <span>تأكيد كلمة المرور</span>
                                    @endif
                                 </label>
                                 <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                 @error('password_confirmation')
                                 <span class="test-center">{{$message}}</span>
                                 @enderror
                              </div>
                              <input type="submit" value="Update" class="btn btn-outline-warning">
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