<?php

namespace App\Livewire\Contract;

use App\Models\Contract;
use Livewire\Component;

class Create extends Component
{
    public Contract $contract;

    public $contract_name;

    public $description;

    public function render()
    {
        return view('livewire.contract.create')
            ->slot('content');
    }

    public function mount()
    {
        $this->contract = new Contract();
        $this->contract_name = '';
        $this->description = '';
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
        $this->contract->contract_name = $this->contract_name;
        $this->contract->description = $this->description;
        $this->contract->save();
        return redirect()->to('/contract');
    }
}
