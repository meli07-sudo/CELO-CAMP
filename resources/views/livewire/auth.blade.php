<div class="sign-in-up-form d-flex flex-column justify-content-center">
    @if ($recoveryPassword && ! $resetPassword)
        <div class="d-flex form-titles">
            <h2 data-formref="#recovery-password"
                class="w-100 text-center a text-capitalize arlon-light title-color active">
                Mot de passe oublié
            </h2>
            <h2 data-formref="#recovery-password"
                class="w-100 text-center a text-capitalize arlon-light title-color d-none">

            </h2>
        </div>
        <div class="forms">
            <div id="recovery-password">
                @livewire("recovery-password")
            </div>
        </div>
        <div class="my-2 text-center mx-auto">
            <a href="#" wire:click.prevent="toggleRecovery" class="text-decoration-underlined">Connexion/Inscription</a>
        </div>
    @elseif ($resetPassword)
    <div class="d-flex form-titles">
        <h2 data-formref="#reset-password"
            class="w-100 text-center a text-capitalize arlon-light title-color active">
            Réinitialisation du mot de passe
        </h2>
        <h2 data-formref="#reset-password"
            class="w-100 text-center a text-capitalize arlon-light title-color d-none">

        </h2>
    </div>
    <div class="forms">
        <div id="reset-password">
            @livewire("reset-password")
        </div>
    </div>
    <div class="my-2 text-center mx-auto">
        <a href="#" wire:click.prevent="toggleReset" class="text-decoration-underlined">Connexion/Inscription</a>
    </div>
    @else
        <div class="d-flex form-titles">
            <h2 class="w-50 text-center a text-capitalize arlon-light title-color active form-title"
                data-formref="#sign-in">
                Connexion</h2>
            <h2 class="w-50 text-center text-capitalize arlon-light title-color form-title" data-formref="#sign-up">
                Inscription</h2>
        </div>
        <div id="forms">
            <div id="sign-in">
                @livewire("sign-in")
            </div>
            <div id="sign-up" class="d-none">
                @livewire("sign-up")
            </div>
        </div>
        <div class="my-2 text-center mx-auto">
            <a href="#" wire:click.prevent="toggleRecovery" class="text-decoration-underlined">Mot de passe oublié</a>
        </div>
    @endif
    
</div>
