<?php

namespace App\Jobs;

use App\Mail\BecomePartnairMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendBecomePartnairEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public array $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to(env("MAIL_ADDRESS_FOR_PARTNAIR_DEMAND"))->send(new BecomePartnairMail([
            "nom" => $this->data['nom'],
            "prenom" => $this->data['prenom'],
            "email" => $this->data['email'],
            "tel" => $this->data['tel'],
            "nomEnterprise" => $this->data['nomEnterprise'],
            "website" => $this->data['website'],
            "pays" => $this->data['pays'],
            "ville" => $this->data['ville'],
            "message" => $this->data['message'],
            "formeSociale" => $this->data['formeSociale'],
            "matriculeOuRegistreCommerce" => $this->data['matriculeOuRegistreCommerce'],
            "file" => $this->data['file'],
        ]));
    }
}
