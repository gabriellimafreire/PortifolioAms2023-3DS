<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipo_Mensagem extends Model
{
    use HasFactory;

    protected $table = 'Tipo_Mensagem';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'Descricao',
    ];

    public function Mensagem(): HasMany {
        return $this->hasMany(Mensagem::class);
    }

    public function Mensagem_Texto(): HasMany {
        return $this->hasMany(Mensagem_Texto::class);
    }

    public function Arquivo(): HasMany {
        return $this->hasMany(Arquivo::class);
    }
}
