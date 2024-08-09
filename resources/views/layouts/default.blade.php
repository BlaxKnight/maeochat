<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('partials.head')
</head>
<body>
  @include('partials.header')
  @include('partials.nav')
  @yield('content')
  @include('partials.footer')
</body>
</html>
