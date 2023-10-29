<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal_Access_Token_Doador extends Model
{
    use HasFactory;

    protected $table = 'Personal_Access_Token_Doador';

    protected $fillable = [
        'id',
        'id_doador',
        'Name',
        'Abilities',
    ];
}
