<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tutorial Site @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
</head>
<body data-base_url={{ url('/') }}>
   @yield('content') 
   <script src="{{ asset('js/jquery-1.12.2.min.js') }}"></script>
   @yield('js')
</body>
</html>
