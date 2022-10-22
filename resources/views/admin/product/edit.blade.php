@extends('admin.layouts.master')
@section('title')
   تعديل المنتج
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
                        <h4 class="page-title m-0">تعديل المنتج :: {{$data->name}}</h4>
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
                    <form action="{{route('product.update','test')}}" method="post" enctype="multipart/form-data">
                      @method('PUT')
                        @csrf


                        <input type="hidden" name="id" value="{{$data->id}}">

                        <div class="row">
                            <div class="col">
                                <label>اسم المنتج</label>
                                <input type="text" name="name" value="{{$data->name}}" class="form-control">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col">
                                <label>سعر المنتج</label>
                                <input type="number" name="price" value="{{$data->price}}" class="form-control">
                                @error('price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>


                            <div class="col">
                                <label>كميه المنتج</label>
                                <input type="number" name="quantity" value="{{$data->quantity}}" class="form-control">
                                @error('quantity')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <br>
                       

                        <div class="row">
                            <div class="col">
                                <label>DAYS TO MATURITY</label>
                                <input type="number" name="days" value="{{ $data->days }}" class="form-control">
                            </div>
    
                            <div class="col">
                                <label>LIFE CYCLE</label>
                                <input type="text" name="life_cycle" value="{{ $data->life_cycle }}" class="form-control">
                            </div>
    
                            <div class="col">
                                <label>DISEASE RESISTANCE CODES </label>
                                <input type="text" name="disease" value="{{ $data->disease }}" class="form-control">
                            </div>
    
                            <div class="col">
                                <label>DISEASE RESISTANCE CODES</label>
                                <input type="text" name="hybrid" value="{{ $data->hybrid }}" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>اسم الفئه</label>
                                <select class="form-control" required name="category_id">
                                    <option value="" disabled selected>-- اختر من القائمه --</option>
                                    @foreach(App\Models\Category::all() as $row)
                                        <option value="{{$row->id}}" {{$row->id == $data->category_id ? 'selected':null}}>{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label>اسم العنصر</label>
                                <select class="form-control p-1" required name="sub_category_id">
                                    <option value="{{$data->sub_category_id}}">{{$data->sub_category->name}}</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>Notes</label>
                                <textarea class="form-control" name="notes" rows="5">
                                    {{$data->notes}}
                                </textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>Shipping Information</label>
                                <textarea class="form-control" name="section_one" rows="5">
                                    {{$data->section_one}}
                                </textarea>
                            </div>
                        </div>
                        
                        <br>
    
                        
                        <div class="row">
                            <div class="col">
                                <label> Growing Information</label>
                                <textarea class="form-control" name="section_two" rows="5">
                                    {{$data->section_two}}
                                </textarea>
                            </div>
                        </div>
                        <br>
    
                        
                        <div class="row">
                            <div class="col">
                                <label> Satisfaction Guarantee</label>
                                <textarea class="form-control" name="section_there" rows="5">
                                    {{$data->section_there}}
                                </textarea>
                            </div>
                        </div>
    
    
                        <br>
    
                        <div class="row">
                            <div class="col">
                                <label>QUICK FACTS</label>
                                @if($data->photo->Filename ?? '')
                                <a href="{{asset('admin/pictures/product/'.$data->id.'/'.$data->photo->Filename)}}" target="_blank"> <img src="{{asset($data->image)}}" width="100px" height="100px" alt=""></a>
                                <input type="hidden" name="oldfile" value="{{$data->photo->Filename}}">
                            @endif
                            </div>
                            <div class="col">
                                <label>QUICK FACTS</label>
                                <input type="file" name="photo" accept="image/*">
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
    <script>
        $(document).ready(function () {
            $('select[name="category_id"]').on('change', function () {
                var SectionId = $(this).val();
                if (SectionId) {

                    $.ajax({
                        url: "{{ URL::to('sections') }}/" + SectionId
                        , type: "GET"
                        , dataType: "json"
                        , success: function (data) {
                            $('select[name="sub_category_id"]').empty();
                            $('select[name="sub_category_id"]').append('<option selected disabled >اختر من القائمه...</option>');
                            $.each(data, function (key, value) {
                                $('select[name="sub_category_id"]').append('<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                        ,
                    });

                } else {
                    console.log('AJAX load did not work');
                }
            });

        });
    </script>

@endsection
