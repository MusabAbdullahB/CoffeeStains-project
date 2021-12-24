@extends('admin.admin_master')
@section('admin')
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Home Page</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Edit Contact</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <!-- user profile section -->
                     <div class="col-md-12">
                        <div class="full dis_flex center_text">
                           <form method="post" action="{{route('update.contact')}}">
                              @csrf
                              <div class="mb-3">
                                 <label class="form-label">Address</label>
                                 <input type="text" class="form-control" value="{{$contact->address}}" name="address">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">Phone Number</label>
                                 <input type="text" class="form-control" value="{{$contact->phone_number}}" name="phone_number">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">Email</label>
                                 <input type="text" class="form-control" value="{{$contact->email}}" name="email">
                              </div>
                              <a type="submit" href="{{route('update.contact')}}" class="btn btn-outline-warning">Update</a>
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