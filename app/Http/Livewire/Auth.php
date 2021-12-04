<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Auth extends Component
{
    public bool $recoveryPassword = false;
    public bool $resetPassword = false;

    public function mount()
    {
        $this->recoveryPassword = route("password.request") == url()->current();
        $this->resetPassword = str_contains(url()->current(), "/reset-password");
    }

    public function toggleRecovery()
    {
        $this->recoveryPassword = !$this->recoveryPassword;
    }
    public function toggleReset()
    {
        $this->resetPassword = !$this->resetPassword;
    }

    public function render()
    {
        return view('livewire.auth');
    }
}
