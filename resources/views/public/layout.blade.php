<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/blockchain.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts-awesome/css/all.min.css') }}">
    @yield("styles")
    @yield("defer_scripts")
    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <title>@yield('page_title') | K4A Blockchain</title>
</head>

<body>
    @yield('main-content')
    @yield("scripts")
</body>

</html>
