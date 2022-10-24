@extends('admin.layouts.master')
@section('title')
جميع العناصر
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
                    <h4 class="page-title m-0">جميع العناصر</h4>
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
        <div class="card m-b-30">
            <div class="card-header">
                @can('اضافه العناصر')
                <div class="row">
                    <div class="col">
                        <a href="{{route('subcategory.create')}}" class="btn btn-success">اضافه عنصر جديد</a>
                    </div>
                </div>
                @endcan

            </div>
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>صوره العنصر</th>
                            <th>اسم العنصر</th>
                            <th>اسم الفئه</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td><a href="{{asset($row->image)}}" target="_blank"> <img src="{{asset($row->image)}}"
                                        width="75" height="75" alt=""></a></td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->category->name}}</td>
                            <td>

                                @can('تعديل العناصر')
                                <a href="{{route('subcategory.edit',$row->id)}}" class="btn btn-success btn-sm"><i
                                        class="fa fa-edit"></i></a>
                                @endcan



                                @can('حذف العناصر')
                                <button class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#delete{{$row->id}}"><i class="fa fa-trash"></i></button>


                                @endcan

                            </td>
                            @include('admin.subcategory.deleted')
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