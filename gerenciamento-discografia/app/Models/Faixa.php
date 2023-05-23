<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'faixas';

    protected $primaryKey = 'id_faixa';
    protected $fillable = [
        'id_album',
        'nome',
        'excluido'
    ];
}
