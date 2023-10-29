<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone_Representante extends Model
{
    use HasFactory;

    protected $table = 'Telefone_Representante';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_representante',
        'NumeroTelefone',
        'Descricao'
    ];
}
