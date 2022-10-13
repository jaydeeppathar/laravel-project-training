<!DOCTYPE HTML>
<html>
<head>
<title>Voguish a Blogging Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
<link href="{{ asset('frontTheme/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
<link href="{{ asset('frontTheme/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Voguish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

@include('frontTheme.stayle')    
</head>
<body class="font">
<!-- header -->
   @include('frontTheme.header')
<!-- header -->
    @yield('content')

    {{-- footer --}}
    @include('frontTheme.footer')
    {{-- footer --}} 

    @include('frontTheme.script') </body> </html>