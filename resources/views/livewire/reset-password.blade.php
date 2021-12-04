<form wire:submit.prevent="resetPasswd">
    @if (session('invalidToken'))
        <div class="d-flex align-content-center">
            <span class="text-danger fs-6">{{ session('invalidToken') }}</span>
        </div>
    @endif
    @if (session('status'))
            <div class="text-success fs-6">
                <span>{{ session('status') }}</span>
            </div>
    @endif
    @csrf
    <div class="input-field-container position-relative my-3 rounded-pill px-5 bg-white">
        <i class="fas fa-user position-absolute"><span class="fs-6 text-danger">*</span></i>
        <input value="{{ old('email') }}" wire:model.defer="email" placeholder="Adresse E-mail"
            class="w-100 p-2 outline-none border-0 bg-transparent" type="email" required maxlength="100">
        @error('email')
            <span class="text-danger error-msg position-absolute">{{ $message }}</span>
        @enderror
    </div>
    <div class="input-field-container position-relative my-3 rounded-pill px-5 bg-white">
        <i class="fas fa-lock position-absolute"><span class="fs-6 text-danger">*</span></i>
        <i class="fas fa-eye position-absolute"></i>
        <input value="{{ old('password') }}" wire:model.defer="password" placeholder="Mot de passe"
            class="w-100 p-2 outline-none border-0 bg-transparent" type="password" maxlength="150" required>
        @error('password')
            <span class="text-danger error-msg position-absolute">{{ $message }}</span>
        @enderror
        @if (session('errors.auth'))
            <span
                class="text-danger error-msg position-absolute position-absolute">{{ session('errors.password') }}</span>
        @endif
    </div>
    <div class="input-field-container position-relative rounded-pill px-5 bg-white my-3">
        <i class="fas fa-lock position-absolute"><span class="fs-6 text-danger">*</span></i>
        <i class="fas fa-eye position-absolute"></i>
        <input value="{{ old('password_confirmation') }}" wire:model.defer="password_confirmation"
            placeholder="Confirmation mot de passe" class="w-100 p-2 outline-none border-0 bg-transparent"
            maxlength="150" type="password" required>
        @error('password_confirmation')
            <span class="text-danger error-msg position-absolute">{{ $message }}</span>
        @enderror
    </div>
    <div class="d-flex justify-content-center align-items-center mt-2 flex-column">
        <button type="submit" class="btn btn-primary rounded-pill arlon-semibold fs-6"
            wire:loading.attr="disabled">Réinitialiser le mot de passe</button>
    </div>
</form>
