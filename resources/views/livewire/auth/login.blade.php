<form class="sign-in-form" wire:submit.prevent='handleSubmit'>
    <div class="wrapper p-3 d-flex flex-column align-items-center justify-content-center">
        <h3 class="form-title poppins-semibold text-center h2">Connexion</h3>
        <div class="form-group text-break position-relative mb-4">
            <div class="form-field rounded-pill d-grid position-relative">
                <label class="d-flex align-items-center justify-content-center cursor-pointer" for="signin-email">
                    <i class="fas fa-envelope fs-4"></i>
                </label>
                <input wire:model="email" type="email" id="signin-email"
                    class="border-0 outline-none border-0 bg-transparent" placeholder="Adresse e-mail">
            </div>
            @error('email')
                <span class="text-danger position-absolute d-inline-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group text-break position-relative mb-4">
            <div class="form-field rounded-pill d-grid position-relative password">
                <label class="d-flex align-items-center justify-content-center cursor-pointer" for="signin-password">
                    <i class="fas fa-key fs-4"></i>
                </label>
                <input wire:model="password" type="password" id="signin-password"
                    class="border-0 outline-none border-0 bg-transparent" placeholder="Mot de passe">
                <i class="fas fa-eye fs-4"></i>

            </div>
            @error('password')
                <span class="text-danger position-absolute d-inline-block">{{ $message }}</span>
            @enderror
        </div>
        <p>
            <input type="checkbox" wire:model="remember" id="signin-remember-me" checked> &nbsp;<label
                for="signin-remember-me" class="poppins-semibold cursor-pointer">Se souvenir de moi</label>
            @error('remember')
                <span class="text-danger small d-block">{{ $message }}</span>
            @enderror
        </p>
        <button class="btn btn-primary rounded-pill poppins-semibold" type="submit">Se
            connecter</button>
            @include("partials.social-auth")
        <a href="#" class="custom-blue-color align-self-start d-inline-flex small mt-2">Mot de passe oublié
            ?</a>

    </div>

</form>
