<div>
    <div class="input-field-container position-relative my-3 rounded-pill px-5 bg-white">
        <i class="fas fa-user position-absolute"><span class="fs-6 text-danger">*</span></i>
        <input value="{{ old('nom') }}" wire:model.defer="nom" placeholder="Nom"
            class="w-100 p-2 outline-none border-0 bg-transparent" type="text" required maxlength="50">
        @error('nom')
            <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
        @enderror
    </div>
    <div class="input-field-container position-relative my-3 rounded-pill px-5 bg-white">
        <i class="fas fa-user position-absolute"><span class="fs-6 text-danger">*</span></i>
        <input value="{{ old('prenom') }}" wire:model.defer="prenom" placeholder="Prénom"
            class="w-100 p-2 outline-none border-0 bg-transparent" type="text" required maxlength="50">
        @error('prenom')
            <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
        @enderror
    </div>
    <div class="input-field-container position-relative my-3 rounded-pill px-5 bg-white">
        <i class="fas fa-inbox position-absolute"><span class="fs-6 text-danger">*</span></i>
        <input value="{{ old('email') }}" wire:model.defer="email" placeholder="Adresse E-mail"
            class="w-100 p-2 outline-none border-0 bg-transparent" type="email" required maxlength="100">
        @error('email')
            <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
        @enderror
    </div>
    <div class="input-field-container position-relative my-3 rounded-pill px-5 bg-white">
        <i class="fas fa-phone position-absolute"></i>
        <input value="{{ old('tel') }}" wire:model.defer="tel" placeholder="Numéro de téléphone"
            class="w-100 p-2 outline-none border-0 bg-transparent" type="tel" required maxlength="50">
        @error('tel')
            <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
        @enderror
    </div>
    <div class="input-field-container position-relative my-3 rounded-pill px-5 bg-white">
        <i class="fas fa-key position-absolute"><span class="fs-6 text-danger">*</span></i>
        <i class="fas fa-eye position-absolute"></i>
        <input value="{{ old('password') }}" wire:model.defer="password" placeholder="Mot de passe"
            class="w-100 p-2 outline-none border-0 bg-transparent" type="password" maxlength="150" required>
        @error('password')
            <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
        @enderror
    </div>
    <div class="input-field-container position-relative rounded-pill px-5 bg-white my-3">
        <i class="fas fa-lock position-absolute"><span class="fs-6 text-danger">*</span></i>
        <i class="fas fa-eye position-absolute"></i>
        <input value="{{ old('password_confirmation') }}" wire:model.defer="password_confirmation"
            placeholder="Confirmation mot de passe" class="w-100 p-2 outline-none border-0 bg-transparent"
            maxlength="150" type="password" required>
        @error('password_confirmation')
            <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
        @enderror
    </div>
    <div class="d-flex justify-content-center align-items-center mt-2 flex-column">
        <button type="button" wire:click="signUp" class="btn btn-primary rounded-pill arlon-semibold fs-5"
            wire:loading.attr="disabled">S'inscrire</button>
        <span>ou</span>
        @include("components.social-auth")
    </div>
</div>
