<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class BecomePartnairMail extends Mailable
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
    public function __construct(array $data)
    {
        $this->nom = $data['nom'];
        $this->prenom = $data['prenom'];
        $this->email = $data['email'];
        $this->tel = $data['tel'];
        $this->nomEnterprise = $data['nomEnterprise'];
        $this->website = $data['website'];
        $this->pays = $data['pays'];
        $this->ville = $data['ville'];
        $this->message = $data['message'];
        $this->formeSociale = $data['formeSociale'];
        $this->matriculeOuRegistreCommerce = $data['matriculeOuRegistreCommerce'];
        $this->file = $data['file'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Nouvelle Demande de Partenariat")->replyTo($this->email)->markdown('mails.public.become-partnair')->attach(storage_path("app/" . $this->file));
    }
}
