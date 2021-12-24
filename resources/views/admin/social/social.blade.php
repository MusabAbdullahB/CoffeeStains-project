@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Social Media</h2>
            </div>
         </div>
      </div>
      <!-- row -->
      <div class="col-md-12">
         <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
               <div class="heading1 margin_0">
                  <h2>Social</h2>
               </div>
               <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="{{route('edit.social')}}" type="button" class="btn btn-outline-warning">Edit</a>
               </div>
            </div>
            <div class="row column1 social_media_section">
               <div class="col-md-4 col-lg-4">
                  <div class="full socile_icons tw margin_bottom_30">
                     <div class="social_icon">
                        <i class="fa fa-twitter"></i>
                     </div>
                     <div class="social_cont">
                        <ul>
                           <li>
                              <span><strong>Twitter</strong></span>
                              <span>{{$social->twitter}}</span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-lg-4">
                  <div class="full socile_icons fb margin_bottom_30">
                     <div class="social_icon">
                        <i class="fa fa-facebook"></i>
                     </div>
                     <div class="social_cont">
                        <ul>
                           <li>
                              <span><strong>Facebook</strong></span>
                              <span>{{$social->facebook}}</span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-lg-4">
                  <div class="full socile_icons instagram margin_bottom_30">
                     <div class="social_icon">
                        <i class="fa fa-instagram"></i>
                     </div>
                     <div class="social_cont">
                        <ul>
                           <li>
                              <span><strong>Instagram</strong></span>
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