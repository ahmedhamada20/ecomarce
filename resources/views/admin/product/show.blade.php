@extends('admin.layouts.master')
@section('title')
عرض صوره المنتجات
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
                        <h4 class="page-title m-0">عرض صوره المنتجات</h4>
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
                <div class="card-header">
                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="page_id" value="3">
                        <input type="hidden" name="id_photos" value="{{$data->id}}">


                        <div class="input-group mb-3">
                            <input type="file" class="form-control" accept="image/*" name="FilenameMany[]"
                                   multiple required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="submit" id="button-addon2">
                                    رفع صور اخري
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach(getphotosProduct($data->id) as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <a href="{{asset('admin/pictures/product/' . $data->id . '/' . $row->Filename)}}"
                                       target="_blank"> <img
                                            src="{{asset('admin/pictures/product/' . $data->id . '/' . $row->Filename)}}"
                                            width="50" height="50" alt=""></a></td>
                                <td>
                                    <button class="btn btn-sm btn-danger" data-toggle="modal"
                                            data-target="#deleted{{$row->id}}"><i class="fa fa-trash"></i>
                                    </button>
                                </td>


                                {{--DELETED Photo--}}
                                <div class="modal fade" id="deleted{{$row->id}}" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">حذف الصور</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('product.destroy','test')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @method('DELETE')
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{$data->id}}">
                                                    <input type="hidden" name="id_photos" value="{{$row->id}}">
                                                    <input type="hidden" name="page_id" value="3">
                                                    <input type="hidden" name="oldfile"
                                                           value="{{$row->Filename ?? ''}}">


                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="text-danger"> هل انت متأكد من عمليه حذف الصوره ؟ </label>
                                                            <input type="text" name="name" class="form-control"
                                                                   value="{{$row->Filename}}" readonly>
                                                        </div>
                                                    </div>

                                                    <br>


                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">اغلاق
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">حذف
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </tr>
                            <!-- Modal -->
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
