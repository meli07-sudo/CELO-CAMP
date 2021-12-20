<div class="bg-white d-flex flex-column justify-content-center align-items-center">
    @include("components.application-logo")
    <div class="row w-100">
        
            @if (session('linkSent'))
            <div class="d-flex justify-content-center shadow p-3 col-12 ">
                    <p class="text-success fw-bold">
                        {{session('linkSent')}}
                        <a class="btn btn-outline-primary my-2 d-block mx-3" href="{{route("dashboard")}}">&leftarrow; Tableau de bord</a>
                    </p>
                </div>
            @else
            <div class="d-flex justify-content-center flex-column align-items-center shadow p-3 col-12 col-lg-4 offset-lg-4">
                <p class="fs-6 my-3 mx-4">
                    <small>
                        Merci de vous être inscrit(e) ! Avant de commencer, veuillez vérifier votre adresse email en
                        cliquant sur le lien que nous venons de vous envoyer. Si vous n'avez pas reçu cet email, nous
                        vous
                        en enverrons un nouveau avec plaisir.
                    </small>
                </p>
                <form wire:submit.prevent="sendVerificationEmail">
                    <button type="submit" class="btn btn-primary">Envoyer l'email de vérification</button>
                </form>
                </div> 
            @endif
        
    </div>
</div>
