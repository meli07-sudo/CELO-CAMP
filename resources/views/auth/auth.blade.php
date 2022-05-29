<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>K4A Blockchain | Authentification</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/auth.css') }}">
    @livewireStyles
    <script defer src="{{ asset('js/auth/auth.js') }}"></script>
</head>

<body>
    <section class="main-container">
        <div class="signin-signup">
            @livewire("auth.login")
            @livewire("auth.register")
        </div>
        <div class="panels-container">
            <div class="panel left-panel text-white">
                <div class="content">
                    <h4 class="h3 poppins-semibold">Lorem ipsum dolor sit amet.</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia veritatis illo ratione alias
                    </p>
                    <a href="#" class="btn btn-outline-primary rounded-pill text-white border-white toggle-form-mode">Se
                        connecter</a>
                </div>
                <img src="" alt="">
            </div>
            <div class="panel right-panel text-white">
                <div class="content">
                    <h4 class="h3 poppins-semibold">Lorem ipsum dolor sit amet.</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia veritatis illo ratione alias
                    </p>
                    <a href="#" class="btn btn-outline-primary rounded-pill text-white border-white toggle-form-mode">Se
                        connecter</a>
                </div>
                <img src="" alt="">
            </div>
        </div>
    </section>
    @livewireScripts
</body>

</html>
