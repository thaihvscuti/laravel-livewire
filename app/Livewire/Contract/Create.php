<?php

namespace App\Livewire\Contract;

use App\Models\Contract;
use Livewire\Component;

class Create extends Component
{
    public $contract_name= '';

    public $description = '';

    public function render()
    {
        $breadcrumbs = [
            [
                'url' => route('contract.index'),
                'name' => 'Contract'
            ],
            'Create'
        ];
        return view('livewire.contract.create')
            ->title('Contract create')
            ->layoutData(['breadcrumbs' => $breadcrumbs]);
    }

    public function rules()
    {
        return [
            'contract_name' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
          'contract_name.required' => 'The :attribute are missing.'
        ];
    }

    public function save() {
        $this->validate();
        $contract = new Contract();
        $contract->contract_name = $this->contract_name;
        $contract->description = $this->description;
        $contract->save();
        return redirect()->to('/contract');
    }
}
