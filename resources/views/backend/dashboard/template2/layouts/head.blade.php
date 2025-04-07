<head>
    <meta charset="utf-8">
    <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/template2/assets/images/favicon.ico')}}">

    <!-- third party css -->
    <link href="{{ asset('backend/template2/assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{ asset('backend/template2/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <!-- <link href="{{ asset('backend/template2/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style"> -->
    <link href="{{ asset('backend/template2/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">

    @if (App::getLocale() == 'en')
    <link href="{{ asset('backend/template2/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    @else
    <link href="{{ asset('backend/template2/assets/css/rtl_style.css') }}" rel="stylesheet">
    @endif
</head>