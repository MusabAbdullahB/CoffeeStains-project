@extends('admin.admin_master')
@section('admin')
<div class="midde_cont">
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>@if(session()->get('lang') == 'arabic') <span>Products</span>
                  @else <span>المنتجات</span>
                  @endif</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>@if(session()->get('lang') == 'arabic') <span>Add Product</span>
                        @else <span>اضافة منتج</span>
                        @endif</h2>
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
                                    <label class="form-label">@if(session()->get('lang') == 'arabic') <span>Product</span>
                                       @else <span>المنتج</span>
                                       @endif</label>
                                    <input type="text" class="form-control" name="name_en">
                                 </div>
                                 <div class="mb-3">
                                    <label class="form-label">@if(session()->get('lang') == 'arabic') <span>Arabic</span>
                                       @else <span>المنتج بالعربية</span>
                                       @endif</label>
                                    <input type="text" class="form-control" name="name_ar">
                                 </div>
                                 <div class="mb-3">
                                    <label class="form-label">@if(session()->get('lang') == 'arabic') <span>Price</span>
                                       @else <span>السعر</span>
                                       @endif</label>
                                    <input type="text" class="form-control" name="price">
                                 </div>
                                 <div class="mb-3">
                                    <label class="form-label">@if(session()->get('lang') == 'arabic') <span>Picture</span>
                                       @else <span>الصورة</span>
                                       @endif</label>
                                    <input class="form-control form-control-sm" name="product_image" type="file">
                                 </div>
                                 <div class="mb-3">
                                    <label class="form-label">@if(session()->get('lang') == 'arabic') <span>Category</span>
                                       @else <span>التصنييف</span>
                                       @endif</label>
                                    <select class="form-select" aria-label="Default select example" name="category">
                                       <option selected>@if(session()->get('lang') == 'arabic') <span>Choose Category</span>
                                          @else <span>اختر تصنيف</span>
                                          @endif</option>
                                       <option value="1">
                                          <a>@if(session()->get('lang') == 'arabic') <a>Coffee</a>
                                             @else <a>قهوة</a>
                                             @endif</a>
                                       </option>
                                       <option value="2">
                                          <a>@if(session()->get('lang') == 'arabic') <a>Cups</a>
                                             @else <a>أكواب</a>
                                             @endif</a>
                                       </option>
                                       <option value="3">
                                          <a>@if(session()->get('lang') == 'arabic') <a>Tools</a>
                                             @else <a>أدوات</a>
                                             @endif</a>
                                       </option>
                                    </select>
                                 </div>
                                 <div class="d-grid gap-2">
                                    @if(session()->get('lang') == 'arabic') <input type="submit" value="Create" class="btn btn-outline-warning">
                                    @else <input type="submit" value="اضافة" class="btn btn-outline-warning">
                                    @endif
                                 </div>
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