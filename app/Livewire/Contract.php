<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contract as ContractModel;

class Contract extends Component
{
    public function render()
    {
        $title = "Contract list";
        $contracts = new ContractModel();
        $contracts = $contracts->sortable('contract_name')->paginate(20);
        return view('livewire.contract.index')
            ->slot('content')
            ->with([
                'title' => $title,
                'contracts' => $contracts
            ]);
    }
}
