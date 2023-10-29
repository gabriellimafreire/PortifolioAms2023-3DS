<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferencia extends Model
{
    use HasFactory;

    protected $table = 'Preferencia';

    public $timestamps = false;

    protected$fillable = [
        'id',
        'Seguimento',
        'id_seguimento',
        'id_doador'
    ];
    
}
