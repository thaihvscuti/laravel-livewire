<?php

namespace App\Livewire\Contract;

use App\Models\Contract;
use Livewire\Component;

class Form extends Component
{
    public $contract_name = '';

    public $description = '';

    public function render()
    {
        return view('livewire.contract.form')
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

    public function save() {
        $this->validate();
        Contract::create([
            'contract_name' => $this->contract_name,
            'description' => $this->description,
        ]);
        return redirect()->to('/contract');
    }
}
