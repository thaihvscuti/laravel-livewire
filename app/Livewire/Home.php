<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $breadcrumbs = 'Home';
        return view('livewire.home', [
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
}
