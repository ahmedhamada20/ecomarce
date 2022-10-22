@extends('admin.layouts.master')
@section('title')
صفحه التحكم
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
@endsection

@section('content')
    <!-- Start page title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">لوحه التحكم</h4>
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
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">الفئات</h6>
                        <h4 class="mb-3 mt-0 float-right">{{App\Models\Category::count()}}</h4>
                    </div>

                </div>
                <div class="p-3">
                        <a href="{{route('category.index')}}" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>

                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-info mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">العناصر</h6>
                        <h4 class="mb-3 mt-0 float-right">{{App\Models\SubCategory::count()}}</h4>
                    </div>

                </div>
                <div class="p-3">

                        <a href="{{route('subcategory.index')}}" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>


                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-pink mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">المنتجات</h6>
                        <h4 class="mb-3 mt-0 float-right">{{App\Models\Product::count()}}</h4>
                    </div>

                </div>
                <div class="p-3">

                        <a href="{{route('product.index')}}" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a>

                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-success mini-stat text-white">
                <div class="p-3 mini-stat-desc">
                    <div class="clearfix">
                        <h6 class="text-uppercase mt-0 float-left text-white-50">Product Sold</h6>
                        <h4 class="mb-3 mt-0 float-right">1890</h4>
                    </div>

                </div>
                <div class="p-3">

                        <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col">
            <div id='calendar'></div>
        </div>
    </div>
@endsection

@section('js')
   {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<script>

    $(document).ready(function () {

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });

        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:'{{route('home')}}',
            selectable:true,
            selectHelper: true,
            select:function(start, end, allDay)
            {
                var title = prompt('اضافه حدث جديد');

                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');

                    var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

                    $.ajax({
                        url:"{{route('add_event')}}",
                        type:"POST",
                        data:{
                            title: title,
                            start: start,
                            end: end,
                            type: 'add'
                        },
                        success:function(data)
                        {
                            calendar.fullCalendar('refetchEvents');
                            toastr.success('تم اضافه الحدث بنجاح');
                        }
                    })
                }
            },
            editable:true,
            eventResize: function(event, delta)
            {
                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"{{route('add_event')}}",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        id: id,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        toastr.success('تم تعديل الحدث بنجاح');
                    }
                })
            },
            eventDrop: function(event, delta)
            {
                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"{{route('add_event')}}",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        id: id,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        toastr.info('تم تعديل الحدث بنجاح');
                    }
                })
            },

            eventClick:function(event)
            {
                if(confirm("هل انت متأكد من عمليه حذف الحدث"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"{{route('add_event')}}",
                        type:"POST",
                        data:{
                            id:id,
                            type:"delete"
                        },
                        success:function(response)
                        {
                            calendar.fullCalendar('refetchEvents');
                            toastr.error('تم حذف الحدث بنجاح');
                        }
                    })
                }
            }
        });

    });

</script>
@endsection

