<!DOCTYPE html>
<html lang="en">

<head>
    @include('parts.style')
</head>

<body>
    @include('parts.head')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @yield('body')
    @include('parts.footer')
</body>

@include('parts.script')

</html>