@extends('admin.layouts.master')
@section('title')
الطلبات
@endsection

@section('css')

@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">جميع الطلبات</h4>
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
          
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>كود الطلب</th>
                            <th>اسم المستخدم</th>
                            <th>سعر الطلب</th>
                            <th>حاله الطلب</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>




                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                           
                            <td>{{$row->code}}</td>
                            <td>{{$row->user->name}}</td>
                            <td>{{$row->total}}</td>
                            <td>{{$row->status()}}</td>
                            <td>
                                <button data-toggle="modal" data-target="#exampleModal{{ $row->id }}" class="btn btn-success btn-sm"><i
                                        class="fa fa-edit"></i></button>
                            </td>
                     @include('admin.order.edit')
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