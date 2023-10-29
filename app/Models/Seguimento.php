<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seguimento extends Model
{
    use HasFactory;


    public $timestamps = false;
    
    protected $table = 'Seguimento';

    protected $fillable = [
        'id',
        'NomeSeguimento'
    ];

    public function Ong(): HasMany {
        return $this->hasMany(Ong::class);
    }

    public function Preferencia(): HasMany {
        return $this->hasMany(Preferencia::class);
    }
}
