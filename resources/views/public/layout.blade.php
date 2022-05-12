<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/blockchain.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/public/app-public.css') }}">
    @yield("styles")
    @yield("defer_scripts")
    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script defer src="{{ asset('js/public/app-public.js') }}"></script>
    <title>@yield('page_title') | K4A Blockchain</title>
</head>

<body>
    <div class="mx-auto width-limited-container">
        @section('header')
            <header class="width-limited-container mx-auto">
                <div class="container-fluid wrapper p-2">
                    <div class="logo-container">
                        @include('components.public.logo')
                    </div>
                    <div class="navbar-container">
                        @include('components.public.public-navbar')
                    </div>
                </div>
            </header>
        @show
        @yield('main-content')
        @section('footer')
            @include('components.public.public-footer')
        @show
    </div>
    @yield("scripts")
</body>

</html>
