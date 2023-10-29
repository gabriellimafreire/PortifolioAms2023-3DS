<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doacao_Material extends Model
{
    use HasFactory;
    
    protected $table = 'Doacao_Material';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_doacoes',
        'tipo_doacao_id',
        'Descricao'
    ];
}
