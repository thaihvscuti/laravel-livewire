<?php

namespace App\Livewire\Contract;

use Livewire\Component;

class Update extends Component
{
    public function render()
    {
        return view('livewire.contract.update')
            ->slot('content');
    }
}
