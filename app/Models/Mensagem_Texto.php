<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem_Texto extends Model
{
    use HasFactory;

    protected $table = 'Mensagem_Texto';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_mensagem',
        'id_tipo_mensagem',
        'mensagem'
    ];
}
