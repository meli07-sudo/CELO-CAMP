<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset("font-awasome/css/all.min.css")}}">
    @yield("styles")
    <title>@yield("title-pape",config("app.name"))</title>
</head>
<body>
    
    @yield("main-content")

    @yield("scripts")
</body>
</html>