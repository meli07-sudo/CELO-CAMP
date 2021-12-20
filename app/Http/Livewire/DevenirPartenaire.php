<?php

namespace App\Http\Livewire;

use App\Mail\DevenirPartenaire as MailDevenirPartenaire;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class DevenirPartenaire extends Component
{
    use WithFileUploads;
    public string $nom = "";
    public string $prenom = "";
    public string $email = "";
    public string $tel = "";
    public string $nomEnterprise = "";
    public string $website = "";
    public string $pays = "";
    public string $filePath = "";
    public string $ville = "";
    public string $message = "";
    public int $formeSociale = 0;
    public string $matriculeOuRegistreCommerce = "";
    public array $typeEntreprises = [];
    public $file;
    protected array $validationRules = [
        'nom' => "bail|required|max:100|min:1",
        'prenom' => "bail|max:100|min:1",
        'email' => "bail|required|email|max:100",
        'tel' => "bail|nullable|max:50|min:8",
        "nomEnterprise" => "required|max:255",
        'website' => "bail|url",
        "pays" => "bail|required|max:50|min:8",
        'ville' => "bail|required|max:50|min:8",
        "matriculeOuRegistreCommerce" => "required",
        "message" => "required|max:5000",
        'formeSociale' => "bail|required|numeric|min:1|max:8",
        'file' => "bail|required|mimes:docx,doc,pdf|max:20480",
    ];
    protected array $validationMessage = [
        "email.required" => "L'adresse e-mail est requise.",
        "email" => ":attribute est invalide.",
        "formeSociale.required" => "La forme sociale est requise.",
        "formeSociale.max" => "Veuillez choisir une forme sociale valide",
        "formeSociale.min" => "Veuillez choisir une forme sociale valide",
        "matriculeOuRegistreCommerce.required" => "L'immatriculation ou numéro de registre de commerce est requis.",
        "ville.required" => "La ville est requise.",
        "file.max" => "Le fichier ne doit pas excéder 20 MB",
        "file.mimes" => "Vous devez choisir un fichier docx, doc ou pdf.",
        "required" => ":attribute est requis.",
        "max" => ":attribute ne doit pas dépasser :max caractères.",
        "min" => ":attribute doit contenir au moins :min caractères.",
    ];
    protected array $validationAttributes = [
        "file" => "Votre CV ou un fichier de présentation de l'entreprise",
        "nom" => "Le nom",
        "prenom" => "Le prénom",
        "email" => "L'adresse e-mail",
        "tel" => "Le numéro de téléphone",
        "ville" => "La ville",
        "nomEnterprise" => "Le nom de l'entreprise",
        "pays" => "Le pays",
        "formeSociale" => "La forme sociale",
        "website" => "Le site internet",
        "message" => "Votre message",
        "matriculeOuRegistreCommerce" => "Immatriculation ou numéro de registre de commerce",
    ];

    public function mount()
    {
        $this->typeEntreprises = [
            "1" => "(S.A) Société Anonyme",
            "2" => "(S.A.R.L) Société À Responsabilité Limitée",
            "3" => "(S.A.S) Société par Action Simplifiée",
            "4" => "(S.N.C) Société en Noms Collectifs",
            "5" => "(S.C.S) Société en Commandit Simple",
            "6" => "(S.C.I) Société Civile Immobilière",
            "7" => "(S.C.P) Société Civile Professionnelle",
            "8" => "Autres"
        ];
    }

    public function updated($file)
    {
        $this->validate([
            'file' => "bail|required|mimes:docx,doc,pdf|max:10240",
        ], [
            "file.required" => ":attribute est requis",
            "file.max" => "Le fichier ne doit pas excéder 10 MB",
            "file.mimes" => "Vous devez choisir un fichier docx, doc ou pdf.",
        ], [
            "file" => "Votre CV ou un fichier de présentation de l'entreprise",
        ]);
    }

    public function sendPartenairDemand()
    {
        $this->validate($this->validationRules, $this->validationMessage, $this->validationAttributes);
        $this->filePath = $this->file->store('files_devenir_partenaire');
        Mail::to(env("MAIL_ADDRESS_FOR_PARTNAIR"))->send(new MailDevenirPartenaire([
            "nom" => $this->nom,
            "prenom" => $this->prenom,
            "email" => $this->email,
            "tel" => $this->tel,
            "nomEnterprise" => $this->nomEnterprise,
            "website" => $this->website,
            "pays" => $this->pays,
            "ville" => $this->ville,
            "message" => $this->message,
            "formeSociale" => $this->typeEntreprises[$this->formeSociale],
            "matriculeOuRegistreCommerce" => $this->matriculeOuRegistreCommerce,
            "file" => $this->filePath,
        ]));
        session()->flash("demand-sent", "Votre demande de partenariat a été envoyée. Nous vous tiendrons très vite au courant de l'état de la demande. Merci !");
        // Storage::deleteDirectory(__DIR__ ,"/../../storage/app/files_devenir_partenaire/files_devenir_partenaire");
    }
    public function render()
    {
        return view('livewire.devenir-partenaire');
    }
}
