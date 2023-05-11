<!DOCTYPE html>
<html lang="en">

<head>
    @include('parts.style')
</head>

<body>
    @include('parts.head')
    @yield('body')
    @include('parts.footer')
</body>

@include('parts.script')

</html>