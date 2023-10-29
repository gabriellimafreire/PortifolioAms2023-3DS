<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passwords_Resets_Ong extends Model
{
    use HasFactory;

    protected $table = 'Passwords_Resets_Ong';

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'email',
    ];
}
