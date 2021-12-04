<div>
    <form wire:submit.prevent="recover" class="recovery-password">
        @if (session('status'))
            <div class="text-success fs-6">
                <span>{{ session('status') }}</span>
            </div>
        @else
            <p class="general-color text-left">
                Mot de passe oublié ? Pas de soucis. Veuillez nous indiquer votre adresse email et nous vous enverrons
                un
                lien de réinitialisation du mot de passe.
            </p>
        @endif
        <div class="input-field-container position-relative my-3 rounded-pill px-5 bg-white">
            <i class="fas fa-user position-absolute"><span class="fs-6 text-danger">*</span></i>
            <input value="{{ old('email') }}" wire:model.defer="email" placeholder="Adresse E-mail"
                class="w-100 p-2 outline-none border-0 bg-transparent" type="email" required maxlength="100">
            @error('email')
                <span class="text-danger error-msg position-absolute">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-center align-items-center mt-2 flex-column">
            <button type="submit" class="text-uppercase btn btn-primary rounded-pill arlon-semibold fs-6"
                wire:loading.attr="disabled">Lien de réinitialisation</button>
        </div>
    </form>
</div>
