<?php

namespace App\Http\Livewire;

use App\Mail\Contact as MailContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Contact extends Component
{
    public string $nom = "";
    public string $email = "";
    public string $subject = "";
    public string $message = "";

    public function sendMsg()
    {
        $this->validate([
            'nom' => "bail|required|max:100|min:1",
            'email' => "bail|required|email|max:100",
            'subject' => "bail|required|min:2|max:150",
            'message' => "bail|required|min:2|max:5000",
        ], [
            "required" => ":attribute est requis(e).",
            "email" => ":attribute est invalide.",
            "max" => ":attribute ne doit pas dépasser :max caractères.",
            "min" => ":attribute doit contenir au moins :min caractères.",
        ], [
            "nom" => "Votre nom",
            "email" => "L'adresse e-mail",
            "subject" => "Le sujet abordé",
            "message" => "Le contenu de votre message",
        ]);

        Mail::to(env("MAIL_FROM_ADDRESS"))->send(new MailContact($this->nom, $this->email, $this->subject, $this->message));
        Session::flash("message-sent", "Nous avons reçu votre message. Une réponse vous sera envoyée dans les plus brefs délais. Merci à vous !!!");
    }
    public function newMsg()
    {
        Session::remove("message-sent");
        $this->nom="";
        $this->message="";
        $this->subject="";
        $this->email="";
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
