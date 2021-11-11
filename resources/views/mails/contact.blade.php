@component('mail::message')
    <h2>Vous avez reçu un message de {{ $name }}</h2>
    <div>
        <h4><u>Sujet</u> : <b>{{ $subject }}</b></h4>
        <p>{{ $message }}</p>
    </div>
@endcomponent
