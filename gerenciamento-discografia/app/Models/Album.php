<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Album extends Authenticatable
{
    protected $table = 'albuns';

    protected $primaryKey = 'id_album';
    protected $fillable = [
        'nome',
        'ano',
        'descricao',
        'excluido'
    ];
}
