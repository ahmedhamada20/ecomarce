@extends('admin.layouts.master')
@section('title')
جميع السليدر
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
                    <h4 class="page-title m-0">جميع السليدر</h4>
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
                <div class="row">
                    @can('اضافه سليدر')
                    <div class="col">
                        <a href="{{route('silder.create')}}" class="btn btn-success">اضافه سليدر جديده</a>
                    </div>
                    @endcan

                </div>
            </div>
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>صوره سليدر</th>
                            <th>اسم سليدر</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>




                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td> <a href="{{asset($row->image)}}" target="_blank"> <img src="{{asset($row->image)}}"
                                        width="75" height="75" alt=""></a></td>
                            <td>{{$row->name}}</td>
                            <td>
                                @can('تعديل سليدر')
                                <a href="{{route('silder.edit',$row->id)}}" class="btn btn-success btn-sm"><i
                                        class="fa fa-edit"></i></a>
                                @endcan

                                @can('حذف سليدر')
                                <button class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#delete{{$row->id}}"><i class="fa fa-trash"></i></button>
                                @endcan


                            </td>
                            @include('admin.silder.deleted')
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