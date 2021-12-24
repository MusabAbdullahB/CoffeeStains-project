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
                     <h2>Add Product</h2>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  </div>
               </div>
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full dis_flex center_text">
                           <td>
                           <form method="post" action="{{route('store.products')}}" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3">
                                 <label class="form-label">Product</label>
                                 <input type="text" class="form-control" name="name">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">Price</label>
                                 <input type="text" class="form-control" name="price">
                              </div>
                              <div class="mb-3">
                                 <label for="formFileSm" class="form-label">Product Picture</label>
                                 <input class="form-control form-control-sm" name="product_photo_path" type="file">
                              </div>
                              <input type="submit" value="Submit" class="btn btn-outline-warning">
                           </form>
                           </td>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endsection