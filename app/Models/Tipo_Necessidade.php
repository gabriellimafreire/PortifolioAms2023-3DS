<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Necessidade extends Model
{
    use HasFactory;

    protected $table = "Tipo_Necessidade";

    protected $fillable = [
        'id',
        'NomeTipoNecessidade'
    ];
}
