<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal_Access_Tokens extends Model
{
    protected $table = "Personal_Access_Tokens";
    use HasFactory;
    protected $fillable = [
        'id',
        'Token_Able',
        'Name',
        'Token',
        'Abilities',
    ];
}
