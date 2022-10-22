@extends('admin.layouts.master')
@section('title')
المستخدمين
@endsection

@section('css')

@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">جميع المستخدمين</h4>
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
        <div class="card m-b-30">
          <div class="card-header">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}">اضافه مستخدم جديد</a>
            </div>
            @if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
          </div>
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم المستخدم</th>
                            <th>البريد الالكتروني</th>
                            <th>الصلاحيه</th>
                            <th>العمليات</th>

                        </tr>
                    </thead>




                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>
                                @if(!empty($row->getRoleNames()))
                                  @foreach($row->getRoleNames() as $v)
                                     <label class="badge badge-success">{{ $v }}</label>
                                  @endforeach
                                @endif
                              </td>

                              <td>
                                <a class="btn btn-info" href="{{ route('users.show',$row->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('users.edit',$row->id) }}">Edit</a>
                                 {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $row->id],'style'=>'display:inline']) !!}
                                     {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                 {!! Form::close() !!}
                             </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $data->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
