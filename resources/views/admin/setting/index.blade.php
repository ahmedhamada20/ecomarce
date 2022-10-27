@extends('admin.layouts.master')
@section('title')
الاعدادات الرئسيه
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
                    <h4 class="page-title m-0">الاعدادات الرئسيه</h4>
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
                <form action="{{route('setting.update','test')}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{$data->id ?? ''}}">

                    <div class="row">
                        <div class="col">
                            <label>اسم الموقع</label>
                            <input type="text" name="name" value="{{$data->name ?? ''}}" class="form-control" required>
                        </div>

                        <div class="col">
                            <label>رقم الجوال</label>
                            <input type="text" name="phone" value="{{$data->phone ?? ''}}" class="form-control">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>رابط الفيس بوك</label>
                            <input type="url" name="facebook" required value="{{$data->facebook ?? ''}}"
                                class="form-control">
                        </div>

                        <div class="col">
                            <label>رابط الانستجرام</label>
                            <input type="url" name="instagram" required value="{{$data->instagram ?? ''}}"
                                class="form-control">
                        </div>

                    </div>
                    <br>

                    <div class="row">


                        <div class="col">
                            <label>رابط تويتر</label>
                            <input type="url" name="twitter" required value="{{$data->twitter ?? ''}}"
                                class="form-control">
                        </div>


                        <div class="col">
                            <label>رابط يوتيوب</label>
                            <input type="url" name="youtube" required value="{{$data->youtube ?? ''}}"
                                class="form-control">
                        </div>


                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>العنوان</label>
                            <textarea class="form-control" rows="6" name="address"
                                required>{{ $data->address ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>الوصف</label>
                            <textarea class="form-control" rows="6" name="dicration"
                                required>{{ $data->dicration ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>ميتا تاج</label>
                            <textarea class="form-control" rows="6" name="meat_tag"
                                required>{{ $data->meat_tag ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>ميتا وصف</label>
                            <textarea class="form-control" rows="6" name="meat_dicration"
                                required>{{ $data->meat_dicration ?? '' }}</textarea>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>map ifarme</label>
                            <textarea class="form-control" rows="6" name="map_ifarme"
                                required>{{ $data->map_ifarme ?? '' }}</textarea>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <label> playstore link</label>
                            <input type="url" name="play_store" required value="{{$data->play_store ?? ''}}"
                                class="form-control">
                        </div>
                        <div class="col">
                            <label> Appstore link</label>
                            <input type="url" name="app_store" required value="{{$data->app_store ?? ''}}"
                                class="form-control">
                        </div>
                    </div>
                    <br>

                    @if($data->image ?? '')
                    <a href="{{asset($data->image)}}" target="_blank"> <img src="{{asset($data->image)}}" width="100px"
                            height="100px" alt=""></a>
                    <input type="hidden" name="oldfile" value="{{$data->photo->Filename}}">
                    @endif

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>صوره الموقع</label>
                            <input type="file" name="photo" class="form-control" accept="image/*">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">تحديث البيانات</button>
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