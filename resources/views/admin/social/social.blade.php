@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>@if(session()->get('lang') == 'arabic') <span>Social Media</span>
                  @else <span>وسائل التواصل</span></a></li>
                  @endif</h2>
            </div>
         </div>
      </div>
      <!-- row -->
      <div class="row column1">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>@if(session()->get('lang') == 'arabic') <span>Social Media</span>
                        @else <span>وسائل التواصل</span>
                        @endif</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                     <a class="btn btn-outline-warning" href="{{route('edit.social')}}">
                        @if(session()->get('lang') == 'arabic') <span>Edit</span>
                        @else <span>تعديل</span>
                     @endif</a>
                  </div>
               </div>
               <div class="row justify-content-center">
                  @if(Session::has('success'))
                  <div class="alert alert-success" role="alert">
                     <strong></strong> {{session::get('success')}}
                  </div>
                  @endif
                  <div class="col-6">
                     <div class="full socile_icons tw margin_bottom_30">
                        <div class="social_icon">
                           <i class="fa fa-twitter"></i>
                        </div>
                        <div class="social_cont">
                           <ul>
                              <li>
                                 @if(session()->get('lang') == 'arabic')
                                 <span><strong>Twitter</strong></span>
                                 @else
                                 <span><strong>تويتر</strong></span>
                                 @endif
                                 <span>{{$social->twitter}}</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="full socile_icons fb margin_bottom_30">
                        <div class="social_icon">
                           <i class="fa fa-facebook"></i>
                        </div>
                        <div class="social_cont">
                           <ul>
                              <li>
                              @if(session()->get('lang') == 'arabic')
                                 <span><strong>Facebook</strong></span>
                                 @else
                                 <span><strong>فيسبوك</strong></span>
                                 @endif
                                 <span>{{$social->facebook}}</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="full socile_icons instagram margin_bottom_30">
                        <div class="social_icon">
                           <i class="fa fa-instagram"></i>
                        </div>
                        <div class="social_cont">
                           <ul>
                              <li>
                              @if(session()->get('lang') == 'arabic')
                                 <span><strong>Instagram</strong></span>
                                 @else
                                 <span><strong>انستغرام</strong></span>
                                 @endif
                                 <span>{{$social->instagram}}</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end row -->
   @endsection