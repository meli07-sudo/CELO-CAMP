<div>
    <div class="sign-in-up-wrapper d-flex justify-content-evenly pt-5 flex-wrap">
        <form class="sign-in-up-form d-flex flex-column justify-content-center">

            @csrf
            <div class="d-flex form-titles">
                <h2 class="w-50 text-center a text-capitalize arlon-light title-color active sign-in-title"
                    data-btn="sign-in-btn">Connexion</h2>
                <h2 class="w-50 text-center text-capitalize arlon-light title-color sign-up-title"
                    data-btn="sign-up-btn">Inscription</h2>
            </div>
            <div class="input-field-container position-relative my-2 rounded-pill px-5 bg-white sign-up-field d-none">
                <i class="fas fa-user position-absolute"></i>
                <input wire:model.defer="nom" placeholder="Nom" class="w-100 p-2 outline-none border-0 bg-transparent"
                    type="text" required maxlength="50">
                @error('nom')
                    <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-field-container position-relative my-2 rounded-pill px-5 bg-white sign-up-field d-none">
                <i class="fas fa-user position-absolute"></i>
                <input wire:model.defer="prenom" placeholder="Prénom"
                    class="w-100 p-2 outline-none border-0 bg-transparent" type="text" required maxlength="50">
                @error('prenom')
                    <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-field-container position-relative my-2 rounded-pill px-5 bg-white">
                <i class="fas fa-user position-absolute"></i>
                <input wire:model.defer="email" placeholder="Adresse E-mail"
                    class="w-100 p-2 outline-none border-0 bg-transparent" type="email" required maxlength="50">
                @error('email')
                    <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-field-container position-relative my-2 rounded-pill px-5 bg-white sign-up-field d-none">
                <i class="fas fa-user position-absolute"></i>
                <input wire:model.defer="tel" placeholder="Numéro de téléphone"
                    class="w-100 p-2 outline-none border-0 bg-transparent" type="tel" required maxlength="50">
                @error('tel')
                    <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-field-container position-relative my-2 rounded-pill px-5 bg-white">
                <i class="fas fa-lock position-absolute fa-"></i>
                <i class="fas fa-eye position-absolute fa-"></i>
                <input wire:model.defer="password" placeholder="Mot de passe"
                    class="w-100 p-2 outline-none border-0 bg-transparent" type="password" maxlength="150" required>
                @error('password')
                    <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-field-container position-relative rounded-pill px-5 bg-white my-2 sign-up-field d-none">
                <i class="fas fa-lock position-absolute"></i>
                <i class="fas fa-eye position-absolute"></i>
                <input wire:model.defer="password_confirmation" placeholder="Confirmation mot de passe"
                    class="w-100 p-2 outline-none border-0 bg-transparent" maxlength="150" type="password" required>
                @error('password_confirmation')
                    <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
                @enderror
            </div>
            <div class="btns d-flex justify-content-center align-items-center mt-2">
                <button type="button" wire:click="signIn"
                    class="btn btn-primary rounded-pill arlon-semibold fs-5 sign-in-btn" wire:loading.attr="disabled">Se
                    connecter</button>
                <button type="button" wire:click="signUp"
                    class="btn btn-primary rounded-pill arlon-semibold fs-5 d-none sign-up-btn"
                    wire:loading.attr="disabled">S'inscrire</button>
            </div>
        </form>
        <div class="d-none imgs d-sm-flex justify-content-center align-items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo K4A Blockchain">
        </div>
    </div>
</div>
