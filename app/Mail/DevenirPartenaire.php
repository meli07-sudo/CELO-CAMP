<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DevenirPartenaire extends Mailable
{
    use Queueable, SerializesModels;

    public string $nom = "";
    public string $prenom = "";
    public string $email = "";
    public string $tel = "";
    public string $nomEnterprise = "";
    public string $website = "";
    public string $pays = "";
    public string $ville = "";
    public string $message = "";
    public string $formeSociale = "";
    public string $matriculeOuRegistreCommerce = "";
    public string $file = "";


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $partenairsInfo)
    {
        $this->nom = $partenairsInfo["nom"];
        $this->prenom = $partenairsInfo["prenom"];
        $this->email = $partenairsInfo["email"];
        $this->tel = $partenairsInfo["tel"];
        $this->nomEnterprise = $partenairsInfo["nomEnterprise"];
        $this->website = $partenairsInfo["website"];
        $this->pays = $partenairsInfo["pays"];
        $this->ville = $partenairsInfo["ville"];
        $this->message = $partenairsInfo["message"];
        $this->formeSociale = $partenairsInfo["formeSociale"];
        $this->matriculeOuRegistreCommerce = $partenairsInfo["matriculeOuRegistreCommerce"];
        $this->file = $partenairsInfo["file"];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Nouvelle Demande de Partenariat")->replyTo($this->email)->markdown("mails.devenir-partenaire")->attach(storage_path("app/" . $this->file));
    }
}
