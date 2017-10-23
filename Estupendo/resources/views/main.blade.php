<!DOCTYPE html>
<html lang="en">
<head>
@include('Partials._head')

@yield('stylesheets')
</head>
<body>

@include('Partials._nav')

@yield('content')

@include('Partials._footer')

@yield('scripts')
</body>
</html>