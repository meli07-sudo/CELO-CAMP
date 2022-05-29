@extends('layout.auth')
@section('page-title', "Vérification Adresse E-mail")
@section('main-content')
    <div class="bg-white wrapper p-4">
        <h3 class="text-success poppins-semibold text-capitalize">Bravo !!</h3>
        <p class="text-success border border-1 p-3">
            Vous avez correctement vérifié votre adresse e-mail. Vous pouvez profitez sereinement de toutes les fonctionnalités que nous offrons sur K4A Blockchain. 
            <br><br>
            <a target="_blank" href="{{route('dashboard')}}" class="btn btn-primary px-2 rounded-3 poppins-semibold">Tableau de bord &rarr;</a>
        </p>
        <small><span class="text-danger">*</span> Vous pouvez fermer cette onglet</small>
    </div>
@endsection
