<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield("title")</title>

    <!-- style -->
        @include('adminTheme.stayle')
        @yield('style')
    <!-- style -->
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">

    <!-- navebar -->
        @include('adminTheme.navebar')
    <!-- navebar -->


    <!-- navebar -->
        @include('adminTheme.sidebar')
    <!-- navebar -->

    <!-- Content Wrapper. Contains page content -->
        @yield('content')
    <!-- /.content-wrapper -->

    <!-- footer -->
        @include('adminTheme.footer')
    <!-- /.footer -->
      
    <!-- footer -->
        @include('adminTheme.script')
        @yield('script')
        @yield('status')

    <!-- /.footer -->
      
</body>
</html>
