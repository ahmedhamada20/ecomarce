@extends('admin.layouts.master')
@section('title')
الانواع
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
                    <h4 class="page-title m-0">الانواع</h4>
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

                    <button class="btn btn-success" data-toggle="modal" data-target="#create">Add new</button>

                    @include('admin.typeProduct.create')

                </div>
            </div>
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>السعر</th>

                            <th>العمليات</th>
                        </tr>
                    </thead>




                    <tbody>
                        @foreach($data->typeProduct as $row)
                        <tr>
                            <td>{{$loop->index+1}}</td>

                            <td>{{$row->name}}</td>
                            <td>{{$row->price}}</td>

                            <td>

                                <div class="row">
                                    <div class="col-1 offset-1">
                                        <button class="btn btn-sm btn-success" data-toggle="modal"
                                            data-target="#edit{{ $row->id }}"><i class="fa fa-edit"></i></button>

                                        @include('admin.typeProduct.edit')
                                    </div>

                                    <div class="col-1 offset-1">


                                        <form action="{{ route('typeProduct.destroy',$row->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>


                                    </div>
                                </div>




                            </td>

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