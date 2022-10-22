@extends('admin.layouts.master')
@section('title')
اضافه مننج جديد
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
                    <h4 class="page-title m-0">اضافه مننج جديد</h4>
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
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <label>اسم المنتج</label>
                            <input type="text" name="name" required class="form-control">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col">
                            <label>سعر المنتج</label>
                            <input type="number" name="price" required class="form-control">
                            @error('price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="col">
                            <label>كميه المنتج</label>
                            <input type="number" name="quantity" required class="form-control">
                            @error('quantity')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>DAYS TO MATURITY</label>
                            <input type="number" name="days" required class="form-control">
                        </div>

                        <div class="col">
                            <label>LIFE CYCLE</label>
                            <input type="text" name="life_cycle" required class="form-control">
                        </div>

                        <div class="col">
                            <label>DISEASE RESISTANCE CODES </label>
                            <input type="text" name="disease" required class="form-control">
                        </div>

                        <div class="col">
                            <label>DISEASE RESISTANCE CODES</label>
                            <input type="text" name="hybrid" required class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>اسم الفئه</label>
                            <select class="form-control" required name="category_id">
                                <option value="" disabled selected>-- اختر من القائمه --</option>
                                @foreach(App\Models\Category::all() as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col">
                            <label>اسم العنصر</label>
                            <select class="form-control p-1" required name="sub_category_id">

                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>Notes</label>
                            <textarea class="form-control" name="notes" rows="5"></textarea>
                        </div>
                    </div>

                    <br>

                    
                    <div class="row">
                        <div class="col">
                            <label>Shipping Information</label>
                            <textarea class="form-control" name="section_one" rows="5"></textarea>
                        </div>
                    </div>
                    
                    <br>

                    
                    <div class="row">
                        <div class="col">
                            <label> Growing Information</label>
                            <textarea class="form-control" name="section_two" rows="5"></textarea>
                        </div>
                    </div>
                    <br>

                    
                    <div class="row">
                        <div class="col">
                            <label> Satisfaction Guarantee</label>
                            <textarea class="form-control" name="section_there" rows="5"></textarea>
                        </div>
                    </div>


                    <br>

                    <div class="row">
                        <div class="col">
                            <label>QUICK FACTS</label>
                            <input type="file" name="photo" required accept="image/*">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>صور المنتج</label>
                            <input type="file" name="FilenameMany[]" multiple accept="image/*">
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