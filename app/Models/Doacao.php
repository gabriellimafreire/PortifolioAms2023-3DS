<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doacao extends Model
{
    use HasFactory;

    protected $table = 'Doacao';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_doador',
        'necessidade_id',
        'tipo_doacao_id',
        'DataDoacao',
        'HoraDoacao'
    ];

    public function Doacao_Monetaria(): HasMany {
        return $this->hasMany(Doacao_Monetaria::class);
    }

    public function Doacao_Material(): HasMany {
        return $this->hasMany(Doacao_Material::class, "doacao_id", "id");
    }

    public function Ong(): BelongsTo {
        return $this->belongsTo(Ong::class, "doacao_id", "id");
    }

    public function Doador(): BelongsTo{
        return $this->belongsTo(Doador::class);
    }
    protected function DataDoacao(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => date('d/m/Y', strtotime($value)),
            set: fn (string $value) => date('Y/m/d', strtotime($value))
        );
    }  
    
}
