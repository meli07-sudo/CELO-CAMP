@extends('layouts.auth')
@section('page-title', 'Réinitialisation du mot de passe')
@section('main-content')
    <section class="p-3 bg-white wrapper">
        <h3 class="poppins-semibold text-center mb-3">Réinitialisation du mot de passe</h3>
        @error('reset-token')
            <span class="py-1 px-5 text-center d-inline-block small text-danger">
                {{ $message }}
            </span>
        @enderror
        <form action="{{ route('post.password-reset') }}" method="post"
            class="d-flex flex-column align-items-center justify-content-center">
            @csrf
            <input type="hidden" value="{{ $token }}" name="reset-token">
            <div class="form-group text-break position-relative mb-2">
                <div class="form-field rounded-pill d-grid position-relative">
                    <label class="d-flex align-items-center justify-content-center cursor-pointer" for="email">
                        <i class="fas fa-envelope fs-4"></i>
                    </label>
                    <input name="email" type="email" value="{{ $email }}" id="email"
                        class="border-0 outline-none border-0 bg-transparent" placeholder="Adresse e-mail">
                </div>
                @error('email')
                    <span class="text-danger px-3 d-inline-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group text-break position-relative mb-2">
                <div class="form-field rounded-pill d-grid position-relative password">
                    <label class="d-flex align-items-center justify-content-center cursor-pointer" for="password">
                        <i class="fas fa-key fs-4"></i>
                    </label>
                    <input name="password" type="password" id="password"
                        class="border-0 outline-none border-0 bg-transparent" placeholder="Mot de passe">
                    <i class="fas fa-eye fs-4"></i>

                </div>
                @error('password')
                    <span class="text-danger px-3 d-inline-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group text-break position-relative mb-4">
                <div class="form-field rounded-pill d-grid position-relative password">
                    <label class="d-flex align-items-center justify-content-center cursor-pointer"
                        for="password_confirmation">
                        <i class="fas fa-key fs-4"></i>
                    </label>
                    <input name="password_confirmation" type="password" id="password_confirmation"
                        class="border-0 outline-none border-0 bg-transparent" placeholder="Confirmation mot de passe">
                    <i class="fas fa-eye fs-4"></i>

                </div>
            </div>
            <p>
                <input type="checkbox" name="remember" id="remember-me" checked> &nbsp;<label for="remember-me"
                    class="poppins-semibold cursor-pointer">Se souvenir de moi</label>
                @error('remember')
                    <span class="text-danger small d-block">{{ $message }}</span>
                @enderror
            </p>
            <button class="btn btn-primary rounded-pill poppins-semibold" type="submit">Enregister</button>
            <a href="{{ route('get.auth') }}" class="btn align-self-start text-decoration-underline">&larr;&nbsp;Se
                connecter</a>
        </form>
    </section>
@endsection
