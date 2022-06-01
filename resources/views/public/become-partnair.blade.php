@extends('layouts.public')
@section('page_title', 'Devenir Partenaire')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/public/partnair.css') }}">
@endsection
@section('main-content')
    <section class="banner">
        <div class="wrapper w-100 h-100 d-flex justify-content-center align-items-center flex-column">
            <h5 class="poppins-regular custom-blue-color h3 text-center">Devenir Partenaire</h5>
            <h2 class="poppins-semibold h1 text-white text-center">Rejoignez notre réseau de partenaires
            </h2>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row g-0 bg-white">
                            <div class="d-none imgs d-sm-flex justify-content-center align-items-center w-50 mx-auto">
                                <img id="logo-blockchain" style="width:80%" src="{{ asset('images/logo-no-bg.png') }}"
                                    alt="Logo K4A Blockchain">
                            </div>
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <div class="bg-white p-md-5 p-4">
                                    <h3 class="title-color poppins-semibold">Pourquoi devenir partenaire avec K4A Blockchain
                                        ?
                                    </h3>
                                    <ol class="list-unstyled poppins-medium">
                                        <li class="my-3">
                                            <span class="fs-5 custom-blue-color">1.</span>
                                            Favoriser l'inclusion financière et la finance
                                            décentralisée en Afrique de l'Ouest
                                        </li>
                                        <li class="my-3">
                                            <span class="fs-5 custom-blue-color">2.</span>
                                            Augmenter votre porte-feuille de clients en se
                                            positionnant sur un nouveau marché prometteur
                                        </li>
                                        <li class="my-3">
                                            <span class="fs-5 custom-blue-color">3.</span>
                                            Proposer plus de services adaptés aux besoins
                                            réels des utilisateurs basés en Afrique de l'Ouest
                                        </li>
                                        <li class="my-3">
                                            <span class="fs-5 custom-blue-color">4.</span>
                                            Réduire les inégalités en
                                            matière d'accès aux services financiers
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-12 p-3">
                                @livewire('public.partnair')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
