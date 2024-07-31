<!DOCTYPE html>
<html class="loading" lang="ru" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Auth">
    <meta name="keywords" content="Auth">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    {{--    <link rel="apple-touch-icon" href="{{ asset('assets2/images/ico/apple-icon-120.png') }}">--}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets2/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/pages/authentication.css') }}">
    <!-- END: Page CSS-->

    <link rel="stylesheet" href="{{ asset('assets2/vendors/js/ladda/ladda-themeless.min.css') }}">
</head>
<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('assets2/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('assets2/vendors/js/ladda/spin.min.js') }}"></script>
<script src="{{ asset('assets2/vendors/js/ladda/ladda.min.js') }}"></script>
<script src="{{ asset('assets2/vendors/js/ladda/ladda.jquery.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('assets2/js/core/app-menu.js') }}"></script>
<script src="{{ asset('assets2/js/core/app.js') }}"></script>
<script src="{{ asset('assets2/js/scripts/components.js') }}"></script>
<script src="{{ asset('assets2/js/functions.js') }}"></script>
<!-- END: Theme JS-->

<script>
    const _token = $('meta[name="csrf-token"]').attr('content');
</script>

@yield('script')

</body>
</html>
