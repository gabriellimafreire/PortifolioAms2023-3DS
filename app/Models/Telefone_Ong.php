<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone_Ong extends Model
{
    use HasFactory;

    protected $table = 'Telefone_Ong';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_ong',
        'NumeroTelefone',
        'Descricao'
    ];
}
