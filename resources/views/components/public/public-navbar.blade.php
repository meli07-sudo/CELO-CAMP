<nav id="nav-bar" class="container-fluid">
    <div class="wrapper row align-items-center justify-content-end">
        <div class="searchbar-container d-none d-sm-block col-sm-6 col-md-7 offset-lg-1 col-lg-6">
            @include('components.public.searchbar')
        </div>
        @guest
            <div class="btns-container text-end col-12 col-sm-6 col-md-5 col-lg-5">
                <a class="small btn poppins-semibold" href="{{ route('get.auth') }}">S'inscrire</a>
                <a class="small btn btn-primary poppins-semibold rounded-pill" href="{{ route('get.auth') }}">Se
                    connecter</a>
            </div>
        @endguest
        @auth
            <div class="btns-container text-end col-12 col-sm-6 col-md-5 col-lg-5">
                <a class="small btn btn-outline-primary poppins-semibold rounded-3" href="{{ route('get.auth') }}"><i
                        class="fas fa-sign-out-alt"></i> Déconnexion</a>
                <a class="small btn btn-primary poppins-semibold rounded-3" href="{{ route('dashboard') }}"><i
                        class="fas fa-home"></i>Tableau de bord</a>
            </div>
        @endauth
    </div>
</nav>
