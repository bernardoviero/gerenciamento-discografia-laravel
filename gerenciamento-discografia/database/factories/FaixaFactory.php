<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Faixa;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaixaFactory extends Factory
{
    protected $model = Faixa::class;

    public function definition()
    {
        return [
            'nome' => fake()->name(),
            'id_album' => Album::all()->random(),
            'duracao' => fake()->date('m:i'),
            'excluido' => 0,
        ];
    }
}
