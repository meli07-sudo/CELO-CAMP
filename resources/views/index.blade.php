@extends("layout.public")
@section('page_title', 'Accueil')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/public/index.css') }}">
@endsection
@section('defer_scripts')
    <script type="module" src="{{ asset('js/public/index.js') }}"></script>
@endsection
@section('main-content')
    <section class="w-100 d-grid align-items-center vh-100 banner mx-auto">
        <div class="container-fluid row align-items-center">
            <div class="banner-container col-12 col-sm-10 col-md-6 col-xl-6 col-lg-6">
                <h5 class="text-white">Bienvenue sur K4A Blockchain</h5>
                <h2 class="text-white poppins-semibold">Meilleur plateforme africaine d'apprentisssage à la Blockchain
                </h2>
                <p class="text-white">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur modi repudiandae asperiores
                    repellendus
                    mollitia, quaerat et sed voluptatum. Architecto dignissimos rem blanditiis numquam sapiente odit
                    dolorum
                    officia harum eum officiis!
                </p>
                <a href="#" class="btn btn-primary poppins-semibold">Commencez maintenant &rarr;</a>
            </div>
        </div>
    </section>
    <section class="poppins-light py-3 about">
        <div class="row my-5">
            <div class="about-img col-0 col-md-5 col-lg-6"></div>
            <div class="about-text p-3 px-4 offset-1 col-10 offset-md-0 col-md-7 col-lg-6">
                <h5 class="poppins-regular custom-blue-color">Lorem ipsum dolor sit.</h5>
                <h2 class="poppins-semibold">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</h2>

                <div class="d-flex gap-3 bg-white my-1 my-sm-2 my-md-3 my-xl-3 my-lg-3 rounded-3 p-2 py-3 about-text-item">
                    <img src="{{ asset('images/learning-online.png') }}" alt="Decentralized Network"
                        class="img">
                    <div>
                        <h6 class="h5 poppins-semibold custom-blue-color poppins-regular">Lorem ipsum dolor sit amet
                            consectetur.</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam voluptate nulla magni sapiente
                            quo eveniet expedita illo autem nisi veniam!</p>
                    </div>
                </div>
                <div class="d-flex gap-3 bg-white my-1 my-sm-2 my-md-3 my-xl-3 my-lg-3 rounded-3 p-2 py-3 about-text-item">
                    <img src="{{ asset('images/certificate.png') }}" alt="Decentralized Network" class="img">
                    <div>
                        <h6 class="h5 poppins-semibold custom-blue-color poppins-regular">Lorem ipsum dolor sit amet
                            consectetur.</h6>
                        <p>Quas quod eveniet saepe tempora sapiente suscipit, inventore corrupti nemo fuga quam dolorem
                            ducimus perspiciatis, quasi porro cum cupiditate exercitationem!</p>
                    </div>
                </div>
                <div class="d-flex gap-3 bg-white my-1 my-sm-2 my-md-3 my-xl-3 my-lg-3 rounded-3 p-2 py-3 about-text-item">
                    <img src="{{ asset('images/scientist.png') }}" alt="Decentralized Network" class="img">
                    <div>
                        <h6 class="h5 poppins-semibold custom-blue-color poppins-regular">Lorem ipsum dolor sit amet
                            consectetur.</h6>
                        <p>Architecto pariatur iste neque et ipsum blanditiis quia saepe, sit exercitationem eaque maxime
                            dicta veniam earum reiciendis totam quisquam! Aut.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- <div class="counters">
            <div>
                <img src="" alt="">
                <div>
                    <span>3000</span>
                    <span>Authors</span>
                </div>
            </div>
            <div>
                <img src="" alt="">
                <div>
                    <span>3000</span>
                    <span>Authors</span>
                </div>
            </div>
            <div>
                <img src="" alt="">
                <div>
                    <span>3000</span>
                    <span>Authors</span>
                </div>
            </div>
            <div>
                <img src="" alt="">
                <div>
                    <span>3000</span>
                    <span>Authors</span>
                </div>
            </div>
        </div> --}}
    <section class="mt-5 popular-courses">
        <h5 class="custom-blue-color text-center">Cours les plus populaires</h5>
        <h2 class="poppins-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <div class="p-3">
            <div id="courses-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#courses-carousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1">1</button>
                    <button type="button" data-bs-target="#courses-carousel" data-bs-slide-to="1"
                        aria-label="Slide 2">2</button>
                    <button type="button" data-bs-target="#courses-carousel" data-bs-slide-to="2"
                        aria-label="Slide 3">3</button>
                </div>
                <div class="carousel-inner mb-3 p-3">
                    <div class="carousel-item active">
                        <div class="wrapper d-flex flex-wrap justify-content-center gap-2 align-items-center">
                            <x-course />
                            <x-course />
                            <x-course />
                            <x-course />
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="wrapper d-flex flex-wrap justify-content-center gap-2 align-items-center">
                            <x-course />
                            <x-course />
                            <x-course />
                            <x-course />
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="wrapper d-flex flex-wrap justify-content-center gap-2 align-items-center">
                            <x-course />
                            <x-course />
                            <x-course />
                            <x-course />
                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#courses-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#courses-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </section>
    <section class="mt-5 be-teacher">
        <h5 class="custom-blue-color text-center">Devenir formateur K4A Blockchain</h5>
        <h2 class="poppins-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <div class="container wrapper p-3 mt-4">
            <div class="row align-items-center">
                <div class="img offset-1 col-10 col-md-7 offset-md-0">
                    <img src="{{ asset('images/bg_3.jpg') }}" alt="" class="w-100 h-100 object-fit-cover img-fluid">
                </div>
                <div class="img offset-1 col-10 col-md-5 offset-md-0">
                    {{-- <h5 class="custom-blue-color text-center">Devenez un Formateur K4A Blockchain</h5> --}}
                    <h4 class="poppins-semibold text-center mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore assumenda illo quod dolorem
                        commodi? Dolore minima ipsum ullam doloribus, quasi eveniet quidem labore officiis ipsam
                        pariatur.
                    </p>
                    {{-- <ul class="poppins-semibold">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eligendi dolore expedita.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eligendi dolore expedita.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eligendi dolore expedita.</li>
                        </ul> --}}
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{ route('become-teacher') }}" class="btn btn-primary">Devenir formateur</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid mx-auto courses-categories mt-5">
        <h5 class="custom-blue-color text-center">Catégories de cours</h5>
        <h2 class="poppins-semibold text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <div class="container-fluid p-3">
            <ul class="nav nav-tabs gap-2 border-0 mx-4" id="categories" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-capitalize active" id="minage-tab" data-bs-toggle="tab"
                        data-bs-target="#minage" type="button" role="tab" aria-controls="minage"
                        aria-selected="true">Minage</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-capitalize" id="trading-tab" data-bs-toggle="tab" data-bs-target="#trading"
                        type="button" role="tab" aria-controls="trading" aria-selected="false">trading</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-capitalize" id="categorie-tab" data-bs-toggle="tab"
                        data-bs-target="#categorie" type="button" role="tab" aria-controls="categorie"
                        aria-selected="false">categorie</button>
                </li>
            </ul>
            <div class="tab-content border my-3" id="categoriesContent">
                <div class="tab-pane fade p-3 category-courses-container show active" id="minage" role="tabpanel"
                    aria-labelledby="minage-tab">
                    <h4 class="col-12 col-sm-9 poppins-semibold">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Aut, voluptas.</h4>
                    <a href="#" class="btn btn-outline-secondary poppins-semibold">Découvrir catégorie</a>
                    <div class="my-2">
                        <p class="col-12 col-sm-10 col-md-9">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta quia quam consequuntur ex!
                            Esse expedita eaque aut consectetur reprehenderit. Veniam quo consequatur, omnis doloribus
                            autem temporibus sed obcaecati voluptates quas magnam reprehenderit, numquam earum
                            voluptatum quae illo nemo maxime consequuntur similique? Veritatis nam laboriosam harum
                            ducimus fugit vitae ad. Nam.
                        </p>
                        <div class="courses d-flex justify-content-center justify-content-lg-start gap-2 flex-wrap">
                            <x-course />
                            <x-course />
                            <x-course />
                            <x-course />
                            <x-course />
                            <x-course />
                            <x-course />
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade p-3 category-courses-container" id="trading" role="tabpanel"
                    aria-labelledby="trading-tab">
                    <h4 class="col-12 col-sm-9 poppins-semibold">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Aut, voluptas.</h4>
                    <a href="#" class="btn btn-outline-secondary poppins-semibold">Découvrir catégorie</a>
                    <div class="my-2">
                        <p class="col-12 col-sm-10 col-md-9">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta quia quam consequuntur ex!
                            Esse expedita eaque aut consectetur reprehenderit. Veniam quo consequatur, omnis doloribus
                            autem temporibus sed obcaecati voluptates quas magnam reprehenderit, numquam earum
                            voluptatum quae illo nemo maxime consequuntur similique? Veritatis nam laboriosam harum
                            ducimus fugit vitae ad. Nam.
                        </p>
                        <div class="courses d-flex justify-content-center justify-content-lg-start gap-2 flex-wrap">
                            <x-course />
                            <x-course />
                            <x-course />
                            <x-course />

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade p-3 category-courses-container" id="categorie" role="tabpanel"
                    aria-labelledby="categorie-tab">
                    <h4 class="col-12 col-sm-9 poppins-semibold">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Aut, voluptas.</h4>
                    <a href="#" class="btn btn-outline-secondary poppins-semibold">Découvrir catégorie</a>
                    <div class="my-2">
                        <p class="col-12 col-sm-10 col-md-9">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta quia quam consequuntur ex!
                            Esse expedita eaque aut consectetur reprehenderit. Veniam quo consequatur, omnis doloribus
                            autem temporibus sed obcaecati voluptates quas magnam reprehenderit, numquam earum
                            voluptatum quae illo nemo maxime consequuntur similique? Veritatis nam laboriosam harum
                            ducimus fugit vitae ad. Nam.
                        </p>
                        <div class="courses d-flex justify-content-center justify-content-lg-start gap-2 flex-wrap">
                            <x-course />
                            <x-course />

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
