@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
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
   </div>
</div>
<!-- row -->
<div class="row column1">
   <div class="col-md-12">
      <div class="white_shd full margin_bottom_30">
         <div class="full graph_head">
            <div class="heading1 margin_0">
               <h2>@if(session()->get('lang') == 'arabic') <span>All Products</span>
                  @else <span>جميع المنتجات</span>
                  @endif</h2>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
               <a class="btn btn-outline-warning" href="{{route('add.products')}}">
                  @if(session()->get('lang') == 'arabic') <span>Add Product</span>
                  @else <span>اضافة منتج</span>
                  @endif</a>
            </div>
         </div>
         <div class="table_section padding_infor_info">
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
               <strong></strong> {{session::get('success')}}
            </div>
            @elseif(Session::has('error'))
            <div class="alert alert-danger" role="alert">
               <strong></strong> {{session::get('error')}}
            </div>
            @endif
            <div class="table-responsive-sm">
               <table class="table">
                  <thead>
                     <tr>
                        <th>
                           @if(session()->get('lang') == 'arabic') <span>Product</span>
                           @else <span>المنتج</span>
                           @endif
                        </th>
                        <th>
                           @if(session()->get('lang') == 'arabic') <span>Price</span>
                           @else <span>السعر</span>
                           @endif
                        </th>
                        <th>
                           @if(session()->get('lang') == 'arabic') <span>Date Added</span>
                           @else <span>تاريخ الاضافة</span>
                           @endif
                        </th>
                        <th>
                           @if(session()->get('lang') == 'arabic') <span>Availability</span>
                           @else <span>التوفر</span>
                           @endif
                        </th>
                        <th>
                           @if(session()->get('lang') == 'arabic') <span>Category</span>
                           @else <span>التصنييف</span>
                           @endif
                        </th>
                        <th>
                           @if(session()->get('lang') == 'arabic') <span>Picture</span>
                           @else <span>الصورة</span>
                           @endif
                        </th>
                        <th>
                           @if(session()->get('lang') == 'arabic') <span>Action</span>
                           @else <span>الاجراءات</span>
                           @endif
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($product as $row)
                     <tr>
                        <th>
                           @if(session()->get('lang') == 'arabic') <span>{{$row->name_en}}</span>
                           @else <span>{{$row->name_ar}}</span>
                           @endif
                        </th>
                        <th>{{$row->price}}</th>
                        <th>{{$row->date_added}}</th>
                        <th>
                           @if($row->availability == 0)
                           @if(session()->get('lang') == 'arabic') <a>Not Available</a>
                           @else <a>غير متوفر</a>
                           @endif
                           @else($row->availability == 1)
                           @if(session()->get('lang') == 'arabic') <a>Available</a>
                           @else <a>متوفر</a>
                           @endif
                           @endif
                        </th>
                        <th>
                           @if($row->category == 1)
                           @if(session()->get('lang') == 'arabic') <a>Coffee</a>
                           @else <a>قهوة</a>
                           @endif
                           @elseif($row->category == 2)
                           @if(session()->get('lang') == 'arabic') <a>Cups</a>
                           @else <a>أكواب</a>
                           @endif
                           @elseif($row->category == 3)
                           @if(session()->get('lang') == 'arabic') <a>Tools</a>
                           @else <a>أدوات</a>
                           @endif
                           @endif
                        </th>
                        <th>
                           <div class="product_img">
                              @if($row->category == 1)
                              <img width="180" src="{{asset('/upload/product_images/coffee_default.png')}}">
                              @elseif($row->category == 2)
                              <img width="180" src="{{asset('/upload/product_images/cup_default.png')}}">
                              @elseif($row->category == 3)
                              <img width="180" src="{{asset('/upload/product_images/tool_default.png')}}">
                              @endif
                           </div>
                        </th>
                        <th>
                           <a class="btn btn-outline-secondary" href="{{route('edit.products', $row->id)}}">
                              @if(session()->get('lang') == 'arabic') <span>Edit</span>
                              @else <span>تعديل</span>
                              @endif</a>
                           <a class="btn btn-outline-danger" href="{{route('delete.products', $row->id)}}">
                              @if(session()->get('lang') == 'arabic') <span>Delete</span>
                              @else <span>حذف</span>
                              @endif</a>
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