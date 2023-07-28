<!DOCTYPE html>
<html lang="en" dir="ltr">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Consultant House') }}</title>

    <!-- Global stylesheets -->
    <link href="{{ asset('admin/assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/toastr.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/tagsinput.css') }}" rel="stylesheet">

    {{-- Always on Below --}}
    <link href="{{ asset('admin/assets/css/custom.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/custom_responsive.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
</head>

<body>
    {{-- @include('admin.layouts.loader') --}}
    <!-- Main navbar -->
    @include('admin.layouts.navbar')
    <!-- /main navbar -->

    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar
        -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Sidebar header -->
                @include('admin.layouts.sidebar-header')

                <!-- /sidebar header -->

                <!-- Main navigation -->
                @include('admin.layouts.sidebar')

                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Page header -->
                {{-- @include('admin.layouts.page-header') --}}
                <!-- /page header -->

                <!-- Content area -->
                {{-- <div class="content">
                    @yield('content')
                </div> --}}
                @yield('content')
                <!-- /content area -->

                <!-- Footer -->
                @include('admin.layouts.footer')
                <!-- /footer -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->



    @include('admin.layouts.script')
</body>

</html>



{{-- Saju Added Script Start --}}
{{--
{{-- Auto Genarate Pass --}}
{{--

     --}}
{{-- Main App Start --}}
{{-- <script src="{{ asset('admin/assets/js/app.js') }}"></script> --}}
{{-- Main App End --}}
{{--
--}}
{{-- Saju Added Script End --}}
