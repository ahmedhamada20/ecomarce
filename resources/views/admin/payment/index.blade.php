@extends('admin.layouts.master')
@section('title')
payment
@endsection

@section('css')

@endsection

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">payment</h4>
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
                <form action="{{ route('group.update','test') }}" method="post">
                    @csrf
                    @method('PUT')


                    <input type="hidden" name="id" value="{{ $row->id ?? null }}">


                    <div class="row">
                        <div class="col">
                            <label>payment</label>
                            <textarea class="form-control" name="payment" rows="5">
                                {{ $row->payment ?? null }}
                            </textarea>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">payment</button>
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
