<?php

namespace Database\Seeders;

use App\Models\ReceitasDespesas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReceitasDespesasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReceitasDespesas::factory(100)->create();
    }
}
