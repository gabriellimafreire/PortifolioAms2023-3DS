<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'Endereco';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_ong',
        'endereco'
    ];
}
