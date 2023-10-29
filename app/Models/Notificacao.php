<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    use HasFactory;

    protected $table = 'Notificacao';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_doador',
        'id_ong',
        'Informacao',
        'Data_Notificacao',
        'Hora_Notificacao',
    ];

    protected $casts = [
        'Data_Notificacao' => 'date',
    ];
}
