<?php

namespace App\Livewire;

use Livewire\Component;

class Contract extends Component
{
    public function render()
    {
        return view('livewire.contract.index')->slot('content');
    }
}
