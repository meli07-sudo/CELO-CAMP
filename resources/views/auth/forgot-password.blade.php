@extends('layouts.auth')
@section('page-title', 'Mot de passe oublié')
@section('main-content')
    <div class="bg-white wrapper p-4">
        <h3 class="poppins-semibold text-center mb-3">Mot de passe oublié</h3>
        @if (session("link-sent"))
            <p class="text-center text-success poppins-medium">
                Lien envoyé !! Un message contenant le lien de réinitialisation de mot de passe a été envoyé à l'adresse e-mail fournie.
            </p>
        @else
            <p class="text-center">
                Vous avez oublié votre mot de passe ? Aucun soucis à vous faire. Veuillez juste entrer votre adresse e-mail.
                Nous allons vous envoyer un lien de réinitialisation pour le mot de passe.
            </p>
        @endif
        <form action="{{route('post.forgot-password')}}" method="post">
            @csrf
            <div class="form-group text-break position-relative mb-2">
                <div class="form-field rounded-pill d-grid position-relative">
                    <label class="d-flex align-items-center justify-content-center cursor-pointer" for="email">
                        <i class="fas fa-envelope fs-4"></i>
                    </label>
                    <input name="email" value="{{old("email")}}" type="email" id="email" class="border-0 outline-none border-0 bg-transparent"
                        placeholder="Adresse e-mail">
                </div>
                @error('email')
                    <span class="text-danger d-block mt-1 mx-3">{{ $message }}</span>
                @enderror
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <input type="submit" class="btn btn-primary rounded-pill poppins-medium" value="Obtenir le lien">
            </div>
            <a href="{{route('get.auth')}}" class="btn text-decoration-underline">&larr;&nbsp;Se connecter</a>
        </form>
    </div>
@endsection
