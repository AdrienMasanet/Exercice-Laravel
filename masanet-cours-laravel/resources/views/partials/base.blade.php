<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de ouf - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>

    @include('partials/topbar')

    @yield('content')

    @include('partials/footer')

    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('js')

</body>

</html>
