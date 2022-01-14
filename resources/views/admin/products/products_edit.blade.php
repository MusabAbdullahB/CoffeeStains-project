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
                     <h2>@if(session()->get('lang') == 'arabic') <span>Edit Product</span>
                        @else <span>تعديل منتج</span>
                        @endif</h2>
                     <h2></h2>
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
                              <div class="mb-3">
                                 <label class="form-label">@if(session()->get('lang') == 'arabic') <span>Product</span>
                                    @else <span>المنتج</span>
                                    @endif</label>
                                 <input type="text" name="name_en" class="form-control" value="{{$product->name_en}}">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">@if(session()->get('lang') == 'arabic') <span>Arabic</span>
                                    @else <span>المنتج بالعربية</span>
                                    @endif</label>
                                 <input type="text" name="name_ar" class="form-control" value="{{$product->name_ar}}">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">@if(session()->get('lang') == 'arabic') <span>Price</span>
                                    @else <span>السعر</span>
                                    @endif</label>
                                 <input type="text" name="price" class="form-control" value="{{$product->price}}">
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="hidden" name="availability" value="0">
                                 <input class="form-check-input" type="checkbox" name="availability" value="1">
                                 <label class="form-check-label" for="flexCheckDefault">
                                    @if(session()->get('lang') == 'arabic') <span>Available</span>
                                    @else <span>متوفر</span>
                                    @endif
                                 </label>
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">@if(session()->get('lang') == 'arabic') <span>Picture</span>
                                    @else <span>الصورة</span>
                                    @endif</label>
                                 <div class="product_img">
                                    @if($row->category == 1)
                                    <img width="180" src="{{asset('/upload/product_images/coffee_default.png')}}">
                                    @elseif($row->category == 2)
                                    <img width="180" src="{{asset('/upload/product_images/cup_default.png')}}">
                                    @elseif($row->category == 3)
                                    <img width="180" src="{{asset('/upload/product_images/tool_default.png')}}">
                                    @endif
                                 </div><br>
                                 <input class="form-control form-control-sm" name="product_image" type="file">
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">@if(session()->get('lang') == 'arabic') <span>Category</span>
                                    @else <span>التصنييف</span>
                                    @endif</label>
                                 <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="category">
                                    <option selected value="{{$product->category}}">
                                       @if($product->category == 1)
                                       <a>@if(session()->get('lang') == 'arabic') <a>Coffee</a>
                                          @else <a>قهوة</a>
                                          @endif</a>
                                       @elseif($product->category == 2)
                                       <a>@if(session()->get('lang') == 'arabic') <a>Cups</a>
                                          @else <a>أكواب</a>
                                          @endif</a>
                                       @elseif($product->category == 3)
                                       <a>@if(session()->get('lang') == 'arabic') <a>Tools</a>
                                          @else <a>أدوات</a>
                                          @endif</a>
                                       @endif
                                    </option>
                                    <option value="1">
                                       @if(session()->get('lang') == 'arabic') <a>Coffee</a>
                                       @else <a>قهوة</a>
                                       @endif
                                    </option>
                                    <option value="2">
                                       @if(session()->get('lang') == 'arabic') <a>Cups</a>
                                       @else <a>أكواب</a>
                                       @endif
                                    </option>
                                    <option value="3">
                                       @if(session()->get('lang') == 'arabic') <a>Tools</a>
                                       @else <a>أدوات</a>
                                       @endif</option>
                                 </select>
                              </div>
                              <div class="d-grid gap-2">
                                 @if(session()->get('lang') == 'arabic') <input type="submit" value="Update" class="btn btn-outline-warning">
                                 @else <input type="submit" value="تحديث" class="btn btn-outline-warning">
                                 @endif
                              </div>
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