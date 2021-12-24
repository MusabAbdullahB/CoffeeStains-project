@extends('admin.admin_master')
@section('admin')
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Social Media</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Edit Social</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <!-- user profile section -->
                     <div class="col-md-12">
                        <div class="full dis_flex center_text">
                           <form>
                              @csrf
                              <div class="mb-3">
                                 <label class="form-label">Twitter</label>
                                 <input type="text" class="form-control" value="{{$social->twitter}}" name="name">
                              </div>
                              <div class="mb-3">
                                 <label for="formFileSm" class="form-label">Facebook</label>
                                 <input type="text" class="form-control" value="{{$social->facebook}}" name="price">
                              </div>
                              <div class="mb-3">
                                 <label for="formFileSm" class="form-label">Instagram</label>
                                 <input type="text" class="form-control" value="{{$social->instagram}}" name="price">
                              </div>
                                 <a type="submit" method="get" href="{{route('update.social',[$social, $social->id])}}" enctype="multipart/form-data" class="btn btn-outline-warning">Update</a>
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