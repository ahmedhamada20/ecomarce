@extends('admin.layouts.master')
@section('title')
    المنتجات
@endsection

@section('css')

@endsection

@section('content')
    <!-- Start page title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">المنتجات</h4>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title-box -->
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col">
            <div class="card">
                @can('اضافه منتج')
                    <div class="card-header">
                        <a href="{{route('product.create')}}" class="btn btn-success">اضافه منتج جديد</a>
                    </div>
                @endcan

                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم المنتج</th>
                            <th>سعر المنتج</th>
                            <th>كيمه المنتج</th>
                      
                            <th>العمليات</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->price}}</td>
                                <td>{{$row->quantity}}</td>
                                <td>
                                    @can('تعديل المنتج')
                                        <a href="{{route('product.edit',$row->id)}}" class="btn btn-success btn-sm"><i
                                                class="fa fa-edit"></i></a>
                                    @endcan
                                    @can('سليدر المنتجات')
                                        <a href="{{route('product.show',$row->id)}}" class="btn btn btn-sm btn-info"><i
                                                class="fa fa-eye"></i></a>

                                    @endcan

                                    @can('حذف المنتج')
                                        <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{$row->id}}"><i class="fa fa-trash"></i></button>
                                    @endcan
                                </td>
                                @include('admin.product.deleted')
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
