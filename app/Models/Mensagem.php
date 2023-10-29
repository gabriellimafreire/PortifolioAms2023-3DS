<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;

    protected $table = 'Mensagem';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_conversa',
        'id_tipo_mensagem',
        'data',
        'Hora_mensagem'
    ];

    public function Mensagem_Texto(): HasOne {
        return $this->hasOne(Mensagem_Texto::class);
    } 

    public function Mensagem_Arquivo(): HasMany {
        return $this->hasMany(Mensagem_Arquivo::class);
    }
}
