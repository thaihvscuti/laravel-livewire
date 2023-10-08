<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 200; $i++) {
            $contract = new Contract();
            $contract->contract_name = "contract_name_" . ($i+1);
            $contract->save();
        }
    }
}
