@extends('admin.layouts.master')
@section('title')
اضافه خصم جديده
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
                    <h4 class="page-title m-0">اضافه خصم جديده</h4>
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
                <form action="{{route('coupon.store')}}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col">
                            <label>كود الخصم</label>
                            <input type="text" name="code" class="form-control" required>
                        </div>


                    </div>
                    @error('code')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>تاريخ البدايه</label>
                            <input type="date" name="start_date" class="form-control" required>
                        </div>
                        <div class="col">
                            <label>تاريخ النهايه</label>
                            <input type="date" name="end_date" class="form-control" required>
                        </div>
                    </div>

                    <br>


                    <div class="row">
                        <div class="col">
                            <label>نوع الخصم</label>
                            <select class="form-control" name="coupon_type" required>
                                <option value="" disabled selected>-- اختر من القائمه --</option>
                                <option value="0">نسبي</option>
                                <option value="1">مبلغ</option>
                            </select>
                        </div>


                        <div class="col">
                            <label>قيمه الخصم</label>
                            <input type="number" class="form-control" name="coupon_percent" required>
                        </div>
                    </div>

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