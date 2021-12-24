@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Contact</h2>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row column1">
   <div class="col-md-2"></div>
   <div class="col-md-12">
      <div class="white_shd full margin_bottom_30">
         <div class="full graph_head">
            <div class="heading1 margin_0">
               <h2>Contact Details</h2>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
               <a href="{{route('edit.contact')}}" type="button" class="btn btn-outline-warning">Edit</a>
            </div>
         </div>
         <div class="card" style="width: 18rem;">
            <div class="card-body">
               <h6 class="card-subtitle mb-2 text-muted">Address</h6>
               <p class="card-text">{{$contact->address}}</p>
               <h6 class="card-subtitle mb-2 text-muted">Phone Number</h6>
               <p class="card-text">+966 {{$contact->phone_number}}</p>
               <h6 class="card-subtitle mb-2 text-muted">Email</h6>
               <p class="card-text">{{$contact->email}}</p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection