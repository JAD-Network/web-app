<?php

namespace App\Livewire\Auth\Login;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Login extends Component
{
    public function render(): View
    {
        return view('livewire.auth.login.login')->layout('components.layouts.auth');
    }
}
