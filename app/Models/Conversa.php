<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Conversa extends Model
{
    use HasFactory;

    protected $table = 'Conversa';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_doador',
        'id_ong',
        'Data_Inicio',
        'Tempo'
    ];

    public function Mensagem(): HasMany {
        return $this->hasMany(Mensagem::class);
    }
    
}
