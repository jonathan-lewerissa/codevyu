<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include ('layouts.head')
    @yield('styles')
</head>
<body>
@yield('content')
 

@yield('scripts')
</body>
</html>