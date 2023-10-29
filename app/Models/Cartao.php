<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    use HasFactory;

    protected $table = 'Cartao';

    protected $fillable = [
        'NumeroCartao',
        'CVV',
        'NomeTitular',
        'DataValidade'
    ];
    
}
