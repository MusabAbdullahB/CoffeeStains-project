@extends('admin.admin_master')
@section('admin')
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>@if(session()->get('lang') == 'arabic') <span>Customers</span>
                        @else <span>العملاء</span>
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
                    <h2>@if(session()->get('lang') == 'arabic') <span>All Customers</span>
                        @else <span>جميع العملاء</span>
                        @endif</h2>
                </div>
                <!--<div class="d-grid gap-2 d-md-flex justify-content-md-end">
               <a type="button" class="btn btn-outline-warning" href="{{route('add.products')}}">Add Product</a>
            </div>-->
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
                                    @if(session()->get('lang') == 'arabic') <span>Username</span>
                                    @else <span>اسم المستخدم</span>
                                    @endif</th>
                                <th>
                                    @if(session()->get('lang') == 'arabic') <span>Email</span>
                                    @else <span>الايميل</span>
                                    @endif</th>
                                <th>
                                    @if(session()->get('lang') == 'arabic') <span>Action</span>
                                    @else <span>اجراءات</span>
                                    @endif</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customer as $row)
                            <tr>
                                <th>{{$row->name}}</th>
                                <th>{{$row->email}}</th>
                                </th>
                                <th>
                                    <a class="btn btn-outline-secondary" href="{{route('edit.customers', $row->id)}}">
                                        @if(session()->get('lang') == 'arabic') <span>Edit</span>
                                        @else <span>تعديل</span>
                                    @endif</a>
                                    <a class="btn btn-outline-danger" href="{{route('delete.customers', $row->id)}}">
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