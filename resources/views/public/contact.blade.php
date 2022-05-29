@extends("layout.public")
@section('page_title', 'Contacts')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/public/contacts.css') }}">
@endsection
@section('main-content')
    <section class="banner">
        <div class="wrapper w-100 h-100 d-flex justify-content-center align-items-center flex-column">
            <h5 class="poppins-regular custom-blue-color h3 text-center">Contactez-nous</h5>
            <h2 class="poppins-semibold h1 text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </h2>
        </div>
    </section>
    <section class="contact-section container-fluid p-3">
        <div class="row">
            <div class="offset-1 col-10 offset-lg-0 col-lg-6 bg-warning">

            </div>
            <div class="offset-1 col-10 offset-lg-0 col-lg-6">
                <div class="my-4">
                    <h3 class="poppins-semibold">Contactez-nous</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem veritatis et incidunt.</p>
                    <div class="row">
                        <div class="location offset-2 col-8 offset-sm-0 col-sm-6 offset-lg-0 col-lg-6 px-2">
                            <h6 class="poppins-semibold my-2">Localisation</h4>
                                Ouadadougou Avenue Saint Léon près de la Cathédrale
                        </div>
                        <div class="email offset-2 col-8 offset-sm-0 col-sm-6 offset-lg-0 col-lg-6 px-2">
                            <h6 class="poppins-semibold my-2">Adresse e-mail</h4>
                                <x-simple-link class="p-0 m-0 text-break" href="mailto:{{ env('K4ABLOCKCHAIN_EMAIL') }}">
                                    {{ env('K4ABLOCKCHAIN_EMAIL') }}
                                </x-simple-link>


                        </div>
                        <div class="phone offset-2 col-8 offset-sm-0 col-sm-6 offset-lg-0 col-lg-6 px-2">
                            <h6 class="poppins-semibold my-2">Téléphone</h4>
                                <x-simple-link class="p-0 m-0 text-break" href="tel:{{ env('K4ABLOCKCHAIN_TELEPHONE') }}">
                                    {{ env('K4ABLOCKCHAIN_TELEPHONE') }}
                                </x-simple-link>
                        </div>
                        <div class="phone offset-2 col-8 offset-sm-0 col-sm-6 offset-lg-0 col-lg-6 px-2">
                            <h6 class="poppins-semibold my-2">Nos réseaux sociaux</h4>
                                <div class="small">
                                    @include('partials.social-links')
                                </div>
                        </div>
                    </div>
                </div>
                <form action="">
                    <div class="row">
                        <div class="col-12 col-md-6 form-group my-2">
                            <input type="text" class="form-control" placeholder="Nom & Prénom(s)">
                            <span class="small error-msg text-danger"></span>
                        </div>
                        <div class="col-12 col-md-6 form-group my-2">
                            <input type="text" class="form-control" placeholder="Adresse électronique">
                            <span class="small error-msg text-danger"></span>
                        </div>
                        <div class="col-12 form-group my-2">
                            <input type="text" class="form-control" placeholder="Sujet">
                            <span class="small error-msg text-danger"></span>
                        </div>
                        <div class="col-12 form-group my-2">
                            <textarea cols="30" rows="6" class=" form-control" placeholder="Entrez votre message ici..."></textarea>
                            <span class="small error-msg text-danger"></span>
                        </div>
                        <button type="submit"
                            class="btn btn-outline-primary col-4 offset-4 col-md-2 offset-md-5">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
