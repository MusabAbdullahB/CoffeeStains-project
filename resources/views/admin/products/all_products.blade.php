@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Products</h2>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- row -->
<div class="col-md-12">
   <div class="white_shd full margin_bottom_30">
      <div class="full graph_head">
         <div class="heading1 margin_0">
            <h2>All Products</h2>
         </div>
         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a type="button" class="btn btn-outline-warning" href="{{route('add.products')}}">Add Product</a>
         </div>
      </div>
      <div class="table_section padding_infor_info">
         <div class="table-responsive-sm">
            <table class="table">
               <thead>
                  <tr>
                     <th>Product</th>
                     <th>Price</th>
                     <th>Date Added</th>
                     <th>Availability</th>
                     <th>Picture</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($product as $row)
                  <tr>
                     <th>{{$row->name}}</th>
                     <th>{{$row->price}}</th>
                     <th>{{$row->date_added}}</th>
                     <th>
                        @if($row->availability == 0)
                        <a>Not Available</a>
                        @else($row->availability == 1)
                        <a>Available</a>
                        @endif
                     </th>
                     <th>
                        <div class="product_img"><img width="180" src="{{url('upload/product_images/'.$row->product_photo_path)}}" alt="#" /></div>
                     </th>
                     <th>
                        <a href="{{route('edit.products', $row->id)}}" type="button" class="btn btn-outline-secondary">Edit</a>
                        <a href="{{route('delete.products', $row->id)}}" type="button" class="btn btn-outline-danger">Delete</a>
                     </th>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection