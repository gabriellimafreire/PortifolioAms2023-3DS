<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona_Access_ONG extends Model
{
    use HasFactory;

    protected $table = 'Persona_Access_ONG';

    protected $fillable = [
        'id',
        'id_ong',
        'Name',
        'Abilities',
    ];
}
