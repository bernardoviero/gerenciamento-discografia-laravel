<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Authenticatable
{
    use HasFactory;
    protected $table = 'albuns';

    protected $primaryKey = 'id_album';
    protected $fillable = [
        'nome',
        'ano',
        'descricao',
        'excluido'
    ];
}
