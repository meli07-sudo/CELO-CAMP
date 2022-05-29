@component('mail::message')
# Félicitations {{ $user->name }},
<br>
Vous y êtes presques. Pour finaliser votre incription et confirmer votre adresse e-mail, veuillez cliquer sur le boutton
ci-dessous :
@component('mail::button', ['url' => $link])
    Terminer l'inscription
@endcomponent
<br>
<br>
<small>Si le button ne fonctionne pas, copier le lien ci-dessous et coller-le dans votre barre d'adresse :
    <br>
    <a href="{{ $link }}">{{ $link }}</a>
</small>
<br>
<br>
Merci,<br>
{{ config('app.name') }}
@endcomponent
