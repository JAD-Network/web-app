<?php

declare(strict_types=1);

namespace App\Livewire\Landing;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('livewire.landing.index')->layout('components.layouts.landing');
    }
}
