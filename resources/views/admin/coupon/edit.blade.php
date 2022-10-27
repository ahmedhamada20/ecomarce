@extends('admin.layouts.master')
@section('title')
   تعديل الفئه
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
                        <h4 class="page-title m-0">تعديل الفئه {{$data->name}}</h4>
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
                    <form action="{{route('coupon.update','test')}}" method="post" enctype="multipart/form-data">
                      @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{$data->id}}">

                        <div class="row">
                            <div class="col">
                                <label>كود الخصم</label>
                                <input type="text" name="code" class="form-control" value="{{ $data->id }}">
                            </div>
    
    
                        </div>
                        @error('code')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
    
                        <br>
    
                        <div class="row">
                            <div class="col">
                                <label>تاريخ البدايه</label>
                                <input type="date" name="start_date" class="form-control" value="{{ $data->start_date }}">
                            </div>
                            <div class="col">
                                <label>تاريخ النهايه</label>
                                <input type="date" name="end_date" class="form-control" value="{{ $data->end_date }}">
                            </div>
                        </div>
    
                        <br>
    
    
                        <div class="row">
                            <div class="col">
                                <label>نوع الخصم</label>
                                <select class="form-control" name="coupon_type" required>
                                    <option value="" disabled selected>-- اختر من القائمه --</option>
                                    <option value="0" {{ $data->coupon_type == 0 ?'selected' : null }}>نسبي</option>
                                    <option value="1" {{ $data->coupon_type == 1 ? 'selected' null }}>مبلغ</option>
                                </select>
                            </div>
    
    
                            <div class="col">
                                <label>قيمه الخصم</label>
                                <input type="number" class="form-control" name="coupon_percent" value="{{ $data->coupon_percent }}">
                            </div>
                        </div>
    
                        <br>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success btn-block">تعديل البيانات</button>
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
