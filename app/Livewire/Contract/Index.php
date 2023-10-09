<?php

namespace App\Livewire\Contract;

use App\Models\Contract as ContractModel;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $contracts = new ContractModel();
        $contracts = $contracts->sortable(['id' => 'desc'])->paginate(20);
        return view('livewire.contract.index')
            ->slot('content')
            ->with([
                'contracts' => $contracts
            ]);
    }
}
