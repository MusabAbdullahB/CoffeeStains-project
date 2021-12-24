@extends('admin.admin_master')
@section('admin')
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Products</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Edit Product</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <!-- user profile section -->
                     <div class="col-md-12">
                        <div class="full dis_flex center_text">
                           <form method="post" action="{{route('update.products', $product->id)}}" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <div class="mb-3">
                                 <label class="form-label">Products</label>
                                 <input type="text" name="name" class="form-control" value="{{$product->name}}">
                              </div>
                              <div class="mb-3">
                                 <label for="formFileSm" class="form-label">Price</label>
                                 <input type="text" name="price" class="form-control" value="{{$product->price}}">
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="availability" value="1">
                                 <label class="form-check-label" for="flexCheckDefault">
                                    Available
                                 </label>
                              </div>
                                 <div class="product_img"><img width="180" src="{{url('upload/product_images/'.$product->product_photo_path)}}" alt="#" /></div>
                                 <input type="submit" value="Submit" class="btn btn-outline-warning">
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