<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{!! asset('/ui/css/bootstraps.min.css') !!}">
  </head>
  <body>
    
    
    @include('layout.navbar')
    @yield('content')
    
    
    
    <script src="{!! asset('/ui/js/bootstrap.min.js') !!}">
    </script>
  </body>
</html>