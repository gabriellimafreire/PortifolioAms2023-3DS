<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipo_Doacao extends Model
{
    use HasFactory;

    protected $table = 'Tipo_Doacao';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'TipoDoacao',
    ];

    public function Doacao_Monetaria(): HasMany {
        return $this->hasMany(Doacao_Monetaria::class);
    }

    public function Doacao_Material(): HasMany {
        return $this->hasMany(Doacao_Material::class);
    }
}
