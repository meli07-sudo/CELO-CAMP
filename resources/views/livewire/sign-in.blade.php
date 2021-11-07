<div>
    <div class="input-field-container position-relative my-3 rounded-pill px-5 bg-white">
        <i class="fas fa-user position-absolute"><span class="fs-6 text-danger">*</span></i>
        <input value="{{ old('nom') }}" wire:model.defer="email" placeholder="Adresse E-mail"
            class="w-100 p-2 outline-none border-0 bg-transparent" type="email" required maxlength="100">
        @error('email')
            <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-field-container position-relative my-3 rounded-pill px-5 bg-white">
        <i class="fas fa-lock position-absolute"><span class="fs-6 text-danger">*</span></i>
        <i class="fas fa-eye position-absolute"></i>
        <input value="{{ old('password') }}" wire:model.defer="password" placeholder="Mot de passe"
            class="w-100 p-2 outline-none border-0 bg-transparent" type="password" maxlength="150" required>
        @error('password')
            <span class="text-danger error-msg position-absolute position-absolute">{{ $message }}</span>
        @enderror
    </div>
    <div class="d-flex justify-content-center align-items-center mt-2 flex-column">
        <button type="button" wire:click="signIn" class="btn btn-primary rounded-pill arlon-semibold fs-5"
            wire:loading.attr="disabled">Se
            connecter</button>
        <span>ou</span>
        @include("components.social-auth")
    </div>
</div>
