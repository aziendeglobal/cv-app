<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('meta-title', 'Aziende Global')</title>

    @include('_partials.head_css')
    @include('_partials.head_js')
</head>

<body class="page-background ">
    <div class="container text-center mt-5 ">

        @yield('content')

    </div>

    @include('_partials.body_css')
    @include('_partials.body_js')
    
</body>

</html>