<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Faixa extends Authenticatable
{
    use HasFactory;

    protected $table = 'faixas';

    protected $primaryKey = 'id_faixa';
    protected $fillable = [
        'id_album',
        'nome',
        'duracao',
        'excluido'
    ];
}
