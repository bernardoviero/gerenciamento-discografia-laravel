<?php

namespace Database\Seeders;

use App\Models\Faixa;
use Illuminate\Database\Seeder;

class FaixasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faixa::factory(8)->create();
    }
}
