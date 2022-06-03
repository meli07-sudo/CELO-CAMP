@component('mail::message')
### {{getRightGreetings()." ".$user->name}},

Vous recevez cet e-mail parce que nous avons reçu une demande de réinitialisation de mot de passe.

@component('mail::button', ['url' => $link])
Réinitialiser votre mot de passe
@endcomponent

Ce lien est valable {{config('auth.passwords.'.config('auth.defaults.passwords').'.expire')}} minutes.
Si vous n'êtes pas l'auteur de cette demande, aucune action n'est requise.

<small>Si le button ne fonctionne pas, copier le lien ci-dessous et coller-le dans votre barre d'adresse :
<br>
<a href="{{ $link }}">{{ $link }}</a>
</small>

Merci,<br>
{{ config('app.name') }}
@endcomponent
