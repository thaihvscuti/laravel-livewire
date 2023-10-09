<?php

namespace App\Livewire\Contract;

use App\Models\Contract as ContractModel;
use Livewire\Component;

class Contract extends Component
{
    protected $listeners = ['delete'];

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

    public function delete($id)
    {
        $contract = ContractModel::findOrFail($id);
        $contract->delete();
        return redirect()->to('/contract');
    }
}
