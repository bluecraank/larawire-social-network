<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class Register extends Component
{
    #[Validate('required|min:3')]
    public $name;

    #[Validate('required|email')]
    public $email;

    #[Validate('required|min:6')]
    public $password;

    public function render()
    {
        return view('livewire.register');
    }

    public function register() {
        $this->validate();
    }
}
