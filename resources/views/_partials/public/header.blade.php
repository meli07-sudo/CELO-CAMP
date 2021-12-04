<div class="top-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md col-xl-5 d-flex align-items-center">
                <a class="navbar-brand align-items-center" href="index.html">
                    <img src="./images/blockchain.png" alt="Logo K4A Blockchain" width="60">
                </a>
            </div>
            <div class="col-md d-flex justify-content-end align-items-center">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fab fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fab fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fab fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fab fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
            <div class="col-md d-flex justify-content-evenly align-items-center">
                @auth
                <a class="" href="#"><form action="{{route('logout')}}" method="post">@csrf <button class="btn btn-primary btn-outline-primary px-3 py-2" type="submit">Déconnexion</button></form></a>
                <a class="btn btn-primary px-3 py-2" href="{{route("dashboard")}}">Tableau de bord</a>
                @endauth
                @guest
                <a class="btn btn-primary btn-outline-primary px-3 py-2" href="{{route('logup')}}">S'inscrire</a>
                <a class="btn btn-primary px-3 py-2" href="{{route('login')}}">Se connecter</a>
                @endguest
            </div>
        </div>
    </div>
</div>
