<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone_Doador extends Model
{
    use HasFactory;

    protected $table = 'Telefone_Doador';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'NumeroTelefone',
        'Descricao',
        'id_doador'
    ];
}
