<?php

namespace App\Livewire\Contract;

use App\Models\Contract as ContractModel;
use Livewire\Component;
use Livewire\WithPagination;

class Contract extends Component
{
    use WithPagination;

    public $search = '';


    public function render()
    {
        $breadcrumbs = [
            'Contract'
        ];
        $contracts = new ContractModel();
        $contracts = $contracts->where('contract_name', 'like', '%'.$this->search.'%')
            ->orWhere('description', 'like', '%'.$this->search.'%')
            ->sortable(['id' => 'desc'])
            ->paginate(20);
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

    protected function queryString()
    {
        return [
            'search'
        ];
    }
}
