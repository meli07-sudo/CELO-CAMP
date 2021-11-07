<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('font-awasome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset("css/auth-layout.css")}}">
    <link rel="shortcut icon" href="{{asset('images/blockchain.png')}}" type="image/x-icon">
    @livewireStyles
    @yield("styles")
    <title>K4A Blockhain | Authentification</title>
</head>
<body>
    <div class="main-wrapper">
        @yield("main-section")
    </div>
    @livewireScripts
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src=""></script>
    @yield('scripts')
</body>
</html>