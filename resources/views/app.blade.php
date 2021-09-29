
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="PIXINVENT">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>


    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('app-assets/img/ico/apple-icon-60.html') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('app-assets/img/ico/apple-icon-76.html') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('app-assets/img/ico/apple-icon-120.html') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('app-assets/img/ico/apple-icon-152.html') }}">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="{{ asset('app-assets/img/ico/favicon-32.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link
        href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/feather/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/chartist.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css') }}">
</head>

<body data-col="2-columns" class=" 2-columns ">
    
    @inertia

    @env ('local')
    <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
    @endenv

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('app-assets/vendors/js/core/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/prism.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/screenfull.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pace/pace.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    {{-- <script src="{{ asset('app-assets/vendors/js/chartist.min.js') }}"></script> --}}
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="{{ asset('app-assets/js/app-sidebar.js') }}"></script>
    <script src="{{ asset('app-assets/js/notification-sidebar.js') }}"></script>
    <script src="{{ asset('app-assets/js/customizer.js') }}"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('app-assets/js/dashboard-ecommerce.js') }}"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>
