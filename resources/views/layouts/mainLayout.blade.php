<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

</head>
  <body>

    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')



  </body>
</html>
