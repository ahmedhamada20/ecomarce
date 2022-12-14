@extends('admin.layouts.master')
@section('title')
   تعديل العنصر
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
                        <h4 class="page-title m-0">تعديل العنصر {{$data->name}}</h4>
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
                    <form action="{{route('subcategory.update','test')}}" method="post" enctype="multipart/form-data">
                      @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{$data->id}}">

                        <div class="row">
                            <div class="col">
                                <label>اسم العنصر</label>
                                <input type="text" name="name" value="{{$data->name}}" class="form-control" >
                            </div>

                            <div class="col">
                                <label>اسم الفئه</label>
                                <select class="form-control" required name="category_id">

                                    @foreach(App\Models\Category::all() as $row)
                                        <option value="{{$row->id}}" {{$row->id == $data->category_id ? 'selected':null}}>{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>ملاحظات</label>
                                <textarea class="form-control" rows="5" name="notes">
                                    {{$data->notes}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        @if($data->image)
                            <a href="{{asset($data->image)}}" target="_blank">  <img src="{{asset($data->image)}}" width="75" height="75" alt=""></a>
                            <input type="hidden" name="oldfile" value="{{$data->photo->Filename}}">
                        @endif

                        <div class="row">
                            <div class="col">
                                <label>صوره العنصر</label>
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
