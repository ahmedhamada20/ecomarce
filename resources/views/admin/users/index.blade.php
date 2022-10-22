@extends('admin.layouts.master')
@section('title')
المستخدمين
@endsection

@section('css')

@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">جميع المستخدمين</h4>
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
                            <th>اسم المستخدم</th>
                            <th>البريد الالكتروني</th>
                           
                        </tr>
                    </thead>




                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
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