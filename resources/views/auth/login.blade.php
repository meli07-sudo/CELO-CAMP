@extends('auth.layout')
@section('main-section')

    <div>
        <div class="d-flex justify-content-evenly pt-5 flex-wrap sign-in-up-wrapper">

            <form class="sign-in-up-form d-flex flex-column justify-content-center">

                @csrf
                <div class="d-flex form-titles">
                    <h2 class="w-50 text-center a text-capitalize arlon-light title-color active" data-formref="#sign-in">
                        Connexion</h2>
                    <h2 class="w-50 text-center text-capitalize arlon-light title-color" data-formref="#sign-up">
                        Inscription</h2>
                </div>
                <div id="forms">
                    <div id="sign-in">
                        @livewire("sign-in")
                    </div>
                    <div id="sign-up" class="d-none">
                        @livewire("sign-up")
                    </div>
                </div>
            </form>
            <div class="d-none imgs d-sm-flex justify-content-center align-items-center w-50">
                <img id="logo-blockchain" src="{{ asset('images/logo-no-bg.png') }}" alt="Logo K4A Blockchain">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/auth.js') }}"></script>
@endsection
