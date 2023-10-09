<?php

namespace App\Livewire\Contract;

use App\Models\Contract;
use Livewire\Component;

class Update extends Component
{
    public Contract $contract;

    public $contract_name;

    public $description;

    public function mount($id){
        $this->contract = Contract::findOrFail($id);
        $this->contract_name = $this->contract->contract_name;
        $this->description = $this->contract->description;
    }

    public function render()
    {
        return view('livewire.contract.update')
            ->slot('content');
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

    public function update()
    {
        $this->validate();
        $this->contract->contract_name = $this->contract_name;
        $this->contract->description = $this->description;
        $this->contract->update();
        return redirect()->to('/contract');
    }
}
