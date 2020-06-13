<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        // dump(auth()->user());

        return view('livewire.dashboard');
    }
}
