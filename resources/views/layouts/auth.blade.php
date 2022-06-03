<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("page-title") | K4A Blockchain</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset("css/layouts/auth.css") }}">
    @yield('styles')
    @yield('defer-scripts')
    <script defer src="{{asset('js/layouts/auth.js')}}"></script>
</head>
<body>
    <section class="vh-100 bg-custom-blue-color vw-100 d-flex justify-content-center align-items-center">
        @yield('main-content')
    </section>
</body>
</html>