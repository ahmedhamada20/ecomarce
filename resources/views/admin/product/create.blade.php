@extends('admin.layouts.master')
@section('title')
اضافه مننج جديد
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                            <label>packet</label>
                            <input type="number" name="packet" required class="form-control">
                        </div>
                        <div class="col">
                            <label>stock</label>
                            <input type="number" name="stock" required class="form-control">
                        </div>
                        <div class="col">
                            <label>seeds_one</label>
                            <input type="number" name="seeds_one" required class="form-control">
                        </div>
                        <div class="col">
                            <label>seeds_two</label>
                            <input type="number" name="seeds_two" required class="form-control">
                        </div>
                        <div class="col">
                            <label>seeds_there</label>
                            <input type="number" name="seeds_there" required class="form-control">
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
                            <label>Hybrid status</label>
                            <input type="text" name="hybrid" required class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>اسم الفئه</label>
                            <select class="js-example-basic-multiple form-control" required name="category_id[]" multiple="multiple">
                                    @foreach(App\Models\Category::all() as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
@endsection