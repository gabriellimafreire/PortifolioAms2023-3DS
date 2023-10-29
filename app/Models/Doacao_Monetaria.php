<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doacao_Monetaria extends Model
{
    use HasFactory;

    protected $table = 'Doacao_Monetaria';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_doacoes',
        'id_tipo_doacao',
        'valor'
    ];
}
