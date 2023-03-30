<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title','default page')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/style.css')}}" />

</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="images/pre-loader/loader-01.svg" alt="">
        </div>

        <!--=================================
 preloader -->


        <!--=================================
 header start-->
            @include('includes.admin.nav')
        <!--=================================
 header End-->

        <!--=================================
 Main content -->

        <div class="container-fluid">
            <div class="row">
                <!-- Left Sidebar start-->
                @include('includes.admin.sidebar')
                <!-- Left Sidebar End-->

                <!--=================================
wrapper -->

                <div class="content-wrapper">
                    @yield('content')

                    <!--=================================
 footer -->

                  @include('includes.admin.footer')
