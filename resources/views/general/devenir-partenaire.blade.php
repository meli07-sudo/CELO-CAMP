@extends("layouts.public-layout")
@section('title-page', 'Devenir un partenaire')
@section('main-content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 mt-5 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="index.html">Accueil <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Contact <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Rejoignez notre réseau de partenaires</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row g-0 bg-white">
                            <div class="d-none imgs d-sm-flex justify-content-center align-items-center w-50">
                                <img id="logo-blockchain" style="width:80%" src="{{ asset('images/logo-no-bg.png') }}"
                                    alt="Logo K4A Blockchain">
                            </div>
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <div class="bg-white p-md-5 p-4">
                                    <h3 class="title-color arlon-semibold">Pourquoi devenir partenaire avec K4A Blockchain ?
                                    </h3>
                                    <p class="mb-4">
                                    <h5 class=""><span class="title-color fw-bold">1. </span><span
                                            class="fw-normal">Favoriser l'inclusion financière et la finance
                                            décentralisée en Afrique de l'Ouest</span> </h4>
                                        <h5 class=""><span class="title-color fw-bold">2. </span><span
                                                class="fw-normal">Augmenter votre porte-feuille de clients en se
                                                positionnant sur un nouveau marché prometteur</span>.</h4>
                                            <h5 class=""><span class="title-color fw-bold">3. </span><span
                                                    class="fw-normal">Proposer plus de services adaptés aux besoins
                                                    réels des utilisateurs basés en Afrique de l'Ouest</span>.</h4>
                                                <h5 class=""><span class="title-color fw-bold">4. </span><span
                                                        class="fw-normal">Contribuer à la réduction de la
                                                        pauvreté</span>.</h4>
                                                    <h5 class=""><span class="title-color fw-bold">5.
                                                        </span><span class="fw-normal">Réduire les inégalités en
                                                            matière d'accès aux services financiers</span>.</h4>
                                                        </p>
                                </div>
                            </div>
                            <div class="col-12 order-lg-last">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Addresse:</span> Ouagadougou, Rue Joseph Badoua</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>E-mail:</span> <a class="text-break"
                                                            href="mailto:info@knowledgeforafrica.com">info@knowledgeforafrica.com</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Téléphone:</span> <a href="tel://1234567920">+226 60 18 54
                                                            25</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @livewire("devenir-partenaire")
                                    <div class="w-100 social-media mt-5 d-flex gap-2 align-items-center">
                                        <h3>Suivez-nous :</h3>
                                        <p class="d-flex align-items-center">
                                            <a href="#"><i class="fab fa-facebook fs-1"></i></a>
                                            <a href="#"><i class="fab fa-twitter fs-1"></i></a>
                                            <a href="#"><i class="fab fa-instagram fs-1"></i></a>
                                            <a href="#"><i class="fab fa-dribble fs-1"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
