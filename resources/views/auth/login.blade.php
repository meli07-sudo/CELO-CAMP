@extends('auth.layout')
@section('main-section')

    <div>
        <div class="d-flex justify-content-evenly pt-5 flex-wrap sign-in-up-wrapper">

                @livewire("auth")
            <div class="d-none imgs d-sm-flex justify-content-center align-items-center w-50">
                <img id="logo-blockchain" src="{{ asset('images/logo-no-bg.png') }}" alt="Logo K4A Blockchain">
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/auth.js') }}"></script>
    @if (url()->current()==route('logup'))
    <script>
        $('h2[data-formref="#sign-up"]').click()
    </script>
    @endif
@endsection
