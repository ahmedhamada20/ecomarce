@extends('admin.layouts.master')
@section('title')
Satisfaction Guarantee
@endsection

@section('css')

@endsection

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Satisfaction Guarantee</h4>
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
                            <label>Satisfaction Guarantee</label>
                            <textarea class="form-control" name="satisfaction_guarantee" rows="5">
                                {{ $row->satisfaction_guarantee ?? null }}
                            </textarea>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">Satisfaction Guarantee</button>
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
