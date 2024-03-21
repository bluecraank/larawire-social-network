<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class Login extends Component
{
    #[Validate('required|email')]
    public $email;

    #[Validate('required|min:6')]
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function login() {
        $this->validate();
    }
}
