@component('mail::message')
### Demande de partenariat

##### Nom et Prénom(s) : {{ $prenom . ' ' . $nom }}
##### Adresse e-mail : {{ $email }}
##### Numéro de téléphone : {{ $tel }}
##### Pays : {{ $pays }}
##### Ville : {{ $ville }}
##### Entreprise : {{ $nomEnterprise . ', ' . $formeSociale . ' avec pour immatriculation ' . $matriculeOuRegistreCommerce }}
##### Site internet : {{ $website }}
##### Message : {{ $message }} 


@endcomponent
