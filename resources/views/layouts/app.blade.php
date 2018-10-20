<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-material-design.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>

    @include('shared.navbar')

    @yield('content')

    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-material-design.min.js') }}"></script>
</body>
</html>