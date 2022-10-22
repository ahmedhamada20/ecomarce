<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>@yield('title')</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">

<meta content="Admin Dashboard" name="description" />
<meta content="ThemeDesign" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<link rel="shortcut icon" href="{{ asset('dash/assets/images/favicon.ico') }}">
@yield('css')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<!-- DataTables -->
<link href="{{asset('dash/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dash/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{asset('dash/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

<!-- morris css -->
<link rel="stylesheet" href="{{ asset('dash/plugins/morris/morris.css') }}">

{{--<link href="{{ asset('dash/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">--}}
{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />--}}
{{--<meta name="csrf-token" content="{{ csrf_token() }}" />--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />--}}
<link href="{{ asset('dash/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('dash/assets/css/style.css') }}" rel="stylesheet" type="text/css">






