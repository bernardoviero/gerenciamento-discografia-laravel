<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    protected $model = Album::class;
    public function definition()
    {
        return [
            'nome' => fake()->name(),
            'descricao' => fake()->unique()->safeEmail(),
            'ano' => date('Y'),
            'excluido' => 0,
        ];
    }
}
