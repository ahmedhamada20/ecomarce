@extends('admin.layouts.master')
@section('title')
   تعديل المنتج
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
                                <label>رقم المنتج</label>
                                <input type="text" name="code_prodcut" value="{{$data->code_prodcut}}" class="form-control">
                                @error('code_prodcut')
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
                            <label>packet</label>
                            <input type="number" name="packet" value="{{ $data->packet }}" class="form-control">
                        </div>
                        <div class="col">
                            <label>stock</label>
                            <input type="number" name="stock" value="{{ $data->stock }}" class="form-control">
                        </div>
                        <div class="col">
                            <label>seeds_one</label>
                            <input type="number" name="seeds_one" value="{{ $data->seeds_one }}" class="form-control">
                        </div>
                        <div class="col">
                            <label>seeds_two</label>
                            <input type="number" name="seeds_two" value="{{ $data->seeds_two }}" class="form-control">
                        </div>
                        <div class="col">
                            <label>seeds_there</label>
                            <input type="number" name="seeds_there" value="{{ $data->seeds_there }}" class="form-control">
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
                                <label>Hybrid status</label>
                                <input type="text" name="hybrid" value="{{ $data->hybrid }}" class="form-control">
                            </div>
                        </div>
                        <br>


                        <div class="row">
                            <div class="col">
                                <label>Type</label>
                                <select class="form-control" name="type" >
                                    <option value="seeds" {{ $data->type == "seeds" ? 'selected' : null }}>seeds</option>
                                    <option value="g" {{ $data->type == "g" ? 'selected' : null }}>g</option>
                                    <option value="kg" {{ $data->type == "kg" ? 'selected' : null }}>kg</option>
                                    <option value="l" {{ $data->type == "l" ? 'selected' : null }}>l</option>
                                    <option value="ml" {{ $data->type == "ml" ? 'selected' : null }}>ml</option>
                                    <option value="m" {{ $data->type == "m" ? 'selected' : null }}>m</option>
                                    <option value="cm" {{ $data->type == "cm" ? 'selected' : null }}>cm</option>
                                    <option value="pcs" {{ $data->type == "pcs" ? 'selected' : null }}>pcs</option>
                                    <option value="set" {{ $data->type == "set" ? 'selected' : null }}>set</option>
                                    <option value="mlm" {{ $data->type == "mlm" ? 'selected' : null }}>ملمتر</option>
                                </select>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col">
                                <label>اسم الفئه</label>
                                <select class="js-example-basic-multiple form-control" required name="category_id[]" multiple>
                                
                                    @foreach(App\Models\Category::all() as $row)
                                        <option value="{{$row->id}}" 
                                            @foreach($data->categoryProdut as $dd) {{$dd->id == $row->id ? 'selected' : ''}} @endforeach
                                            
                                            
                                            >{{$row->name}}</option>
                                    @endforeach
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
  


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
@endsection
