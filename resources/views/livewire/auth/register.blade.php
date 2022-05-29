<form class="sign-up-form" wire:submit.prevent="handleSubmit">
    <div class="wrapper p-3 d-flex flex-column align-items-center justify-content-center">
        <h3 class="form-title poppins-semibold text-center h2">Inscription</h3>
        <div class="form-group text-break position-relative mb-4">
            <div class="form-field rounded-pill d-grid position-relative">
                <label class="d-flex align-items-center justify-content-center cursor-pointer" for="signup-nom">
                    <i class="fas fa-envelope fs-4"></i>
                </label>
                <input wire:model="nom" type="text" id="signup-nom" class="border-0 outline-none border-0 bg-transparent"
                    placeholder="Nom">
            </div>
            @error('nom')
                <span class="text-danger position-absolute d-inline-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group text-break position-relative mb-4">
            <div class="form-field rounded-pill d-grid position-relative">
                <label class="d-flex align-items-center justify-content-center cursor-pointer" for="signup-prenom">
                    <i class="fas fa-envelope fs-4"></i>
                </label>
                <input wire:model="prenom" type="text" id="signup-prenom"
                    class="border-0 outline-none border-0 bg-transparent" placeholder="Prénom(s)">
            </div>
            @error('prenom')
                <span class="text-danger position-absolute d-inline-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group text-break position-relative mb-4">
            <div class="form-field rounded-pill d-grid position-relative">
                <label class="d-flex align-items-center justify-content-center cursor-pointer" for="signup-email">
                    <i class="fas fa-envelope fs-4"></i>
                </label>
                <input wire:model="email" type="email" id="signup-email"
                    class="border-0 outline-none border-0 bg-transparent" placeholder="Adresse e-mail">
            </div>
            @error('email')
                <span class="text-danger position-absolute d-inline-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group text-break position-relative mb-4">
            <div class="form-field rounded-pill d-grid position-relative password">
                <label class="d-flex align-items-center justify-content-center cursor-pointer" for="signup-password">
                    <i class="fas fa-key fs-4"></i>
                </label>
                <input wire:model.delay.1000ms="password" type="password" id="signup-password"
                    class="border-0 outline-none border-0 bg-transparent" placeholder="Mot de passe">
                <i class="fas fa-eye fs-4"></i>

            </div>
            @error('password')
                <span class="text-danger position-absolute d-inline-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group text-break">
            <div class="form-field rounded-pill d-grid position-relative password">
                <label class="d-flex align-items-center justify-content-center cursor-pointer"
                    for="signup-password_confirmation">
                    <i class="fas fa-key fs-4"></i>
                </label>
                <input wire:model.delay.1000ms="password_confirmation" type="password" id="signup-password_confirmation"
                    class="border-0 outline-none border-0 bg-transparent" placeholder="Confirmation mot de passe">
                <i class="fas fa-eye fs-4"></i>

            </div>
        </div>
        <p>
            <input type="checkbox" wire:model="remember" id="signup-remember-me"> &nbsp;<label for="signup-remember-me"
                class="poppins-semibold cursor-pointer">Se souvenir de moi</label>
            @error('remember')
                <span class="text-danger d-inline-block">{{ $message }}</span>
            @enderror
        </p>
        <button class="btn btn-primary rounded-pill poppins-semibold" type="submit">S'inscrire</button>
    </div>

</form>
