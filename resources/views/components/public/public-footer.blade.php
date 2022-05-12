<footer class="mt-5 border border-top">
    <div class="wrapper px-5 poppins-light container-fluid p-2">
        <div class="footer-header w-100 d-flex justify-content-between align-items-center">
            @include('components.public.logo')
            <a href="#" class="btn btn-primary poppins-semibold rounded-pill border-1 border-white">
                Tous nos cours&rarr;
            </a>
        </div>
        <div class="row my-4">
            <div class="col-10 mx-auto col-sm-6 col-md-3">
                <span class="footer-title poppins-semibold fs-5">Nos Adresses</span>
                <ul class="list-unstyled my-3 mx-2">
                    <li class="my-2">
                        <a class="text-decoration-none general-color poppins-regular small" href="#">
                            <i class="fas fa-map-marked"></i>&nbsp;&nbsp;
                            <span>Ouagadougou pres de la Cathédrale</span>
                        </a>
                    </li>
                    <li class="my-2">
                        <a class="text-decoration-none general-color poppins-regular small" href="tel:">
                            <i class="fas fa-phone"></i>&nbsp;&nbsp;
                            <span>{{ env('K4ABLOCKCHAIN_TELEPHONE') }}</span>
                        </a>
                    </li>
                    <li class="my-2">
                        <a class="text-decoration-none general-color poppins-regular small"
                            href="mailto:info@k4ablockchain.com">
                            <i class="fas fa-envelope"></i>&nbsp;&nbsp;
                            <span>info@k4ablockchain.com</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-10 mx-auto col-sm-6 col-md-3">
                <span class="footer-title poppins-semibold fs-5">Ressources</span>
                <ul class="list-unstyled my-3 mx-2">
                    <li class="my-2">
                        <a class="general-color poppins-regular" href="{{ route('become-teacher') }}">
                            Devenir formateur
                        </a>
                    </li>
                    <li class="my-2">
                        <a class="general-color poppins-regular" href="{{ route('become-partnair') }}">
                            Devenir partenaire
                        </a>
                    </li>
                    <li class="my-2">
                        <a class="general-color poppins-regular" href="{{ route('contacts') }}">
                            Nous contacter
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-10 mx-auto col-sm-6 col-md-3">
                <span class="footer-title poppins-semibold fs-5">Identité</span>
                <ul class="list-unstyled my-3 mx-2">
                    <li class="my-2">
                        <a class="general-color poppins-regular" href="#">Qui sommes-nous ?</a>
                    </li>
                    <li class="my-2">
                        <a class="general-color poppins-regular" href="tel:">Nos partenaires</a>
                    </li>
                    <li class="my-2">
                        <a class="general-color poppins-regular" href=""></a>
                    </li>
                </ul>
            </div>
            <div class="col-10 mx-auto col-sm-6 col-md-3">
                <span class="footer-title d-block poppins-semibold fs-6 my-2">Abonnez-vous à notre newsletter</span>
                <form class="newletter d-flex align-items-center gap-2">
                    <input class="form-control" type="email" />
                    <input type="submit" class="btn btn-primary poppins-regular" value="Souscrire">
                </form>
                <span class="footer-title d-block poppins-semibold fs-6 my-2">Suivez-nous</span>
                @include('partials.social-links')
            </div>
        </div>
    </div>
    <div class="copyright w-100 d-flex justify-content-center align-items-center">
        Tous droits réservés par &nbsp;<a href="https://knowledgeforafrica.com" target="_blank"
            class="custom-blue-color text-decoration-none">Knowledge For Africa</a>&nbsp; - Copyright 2022
    </div>
</footer>
