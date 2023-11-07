<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webmin-bootstrap-4-angular-12-admin-dashboard-template/html-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2023 10:49:19 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 5 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title')</title>

    @include('dashboard.layouts.styles')
</head>

<body>
    <div class="wrapper">
        <!--=================================
    preloader -->
        <div id="pre-loader">
            <img src="{{ asset('assets/images/pre-loader/loader-01.svg') }}" alt="" />
        </div>
        <!--=================================
    preloader -->

        @include('dashboard.layouts.head')

        <!--=================================
    Main content -->
        <div class="container-fluid">
            @include('dashboard.layouts.sidebar')

            <!--================================= wrapper -->
            <div class="content-wrapper">
                @yield('crumbs')
                @yield('content')
                <!--================================= wrapper -->

                @include('dashboard.layouts.footer')
            </div>
            <!-- main content wrapper end-->
        </div>
        <!--================================= Main content -->

    </div>

    @include('dashboard.layouts.scripts')
</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webmin-bootstrap-4-angular-12-admin-dashboard-template/html-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2023 10:49:40 GMT -->

</html>
