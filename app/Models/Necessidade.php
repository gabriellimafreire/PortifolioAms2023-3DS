<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Necessidade extends Model
{
    use HasFactory;

    protected $table = 'Necessidade';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_ong',
        'NomeNecessidade',
        'Categoria',
        'descricao',
        'quantidade',
        'meta',
        'tipo_necessidade_id',
        'CaminhoFotosNecessidade'
    ];

    public function Doacoes(): HasMany {
        return $this->hasMany(Doacoes::class);
    }

    public function Ong(): BelongsTo{
        return $this->belongsTo(Ong::class);
    }
}
