@component('mail::message')
    <div>
        <p>
            <span>Nom & Prénom(s) : <b>{{ $nom . ' ' . $prenom }}</b></span><br>
            <span>Adresse e-mail : <b>{{ $email }}</b></span><br>
            <span>Numéro de téléphone : <b>{{ $email }}</b></span><br>
            <span>Pays : <b>{{ $pays }}</b></span><br>
            <span>Ville : <b>{{ $ville }}</b></span><br>
            <span>Entreprise :
                <b>{{ $nomEnterprise . ', ' . $formeSociale . ' avec pour immatriculation ' . $matriculeOuRegistreCommerce }}</b></span><br>
            <span>Site internet : <b>{{ $website }}</b></span><br>
        </p>
    </div>
    <div>
        <h6>Message</h6>
        <p style="margin-left: 16px">{{ $message }}</p>
    </div>
@endcomponent
