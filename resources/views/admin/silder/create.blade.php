@extends('admin.layouts.master')
@section('title')
اضافه سليدر جديده
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
                        <h4 class="page-title m-0">اضافه سليدر جديده</h4>
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
                <div class="card-body">
                    <form action="{{route('silder.store')}}" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="row">
                            <div class="col">
                                <label>اسم السليدر</label>
                                <input type="text" name="name" class="form-control" >
                            </div>


                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>ملاحظات</label>
                                <textarea class="form-control" rows="5" name="notes"></textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>صوره السليدر</label>
                                <input type="file" name="photo" accept="image/*" >
                            </div>
                        </div>

                        <br>
                        @error('photo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <br>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success btn-block">حفظ البيانات</button>
                            </div>
                            <div class="col">
                                <a href="{{route('home')}}" class="btn btn-info btn-block">رجوع الي الصفحه الرئسيه</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
