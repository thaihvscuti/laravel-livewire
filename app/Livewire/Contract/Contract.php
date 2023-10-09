<?php

namespace App\Livewire\Contract;

use App\Models\Contract as ContractModel;
use Livewire\Component;

class Contract extends Component
{
    protected $listeners = ['delete'];

    public function render()
    {
        $breadcrumbs = [
            'Contract'
        ];
        $contracts = new ContractModel();
        $contracts = $contracts->sortable(['id' => 'desc'])->paginate(20);
        return view('livewire.contract.index', [
            'contracts' => $contracts
        ])
            ->title('Contract list')
            ->layoutData(['breadcrumbs' => $breadcrumbs]);
    }

    public function delete($id)
    {
        $contract = ContractModel::findOrFail($id);
        $contract->delete();
        return redirect()->to('/contract');
    }
}
