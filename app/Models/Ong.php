<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Ong extends User
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'Ong';

    protected $guard = 'Ong';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'seguimento_id',
        'representante_id',
        'NomeFantasia',
        'DataFundacao',
        'CNPJ',
        'HoraDia',
        'SobreOng',
        'LocalFotoPerfil',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'DataFundacao' => 'datetime',
    ];

    public function Telefone_Ong(): HasMany {
        return $this->HasMany(Telefone_Ong::class);
    }

    public function Endereco_Ong(): HasMany {
        return $this->hasMany(Endereco::class);
    }

    public function Seguimento(): HasMany {
        return $this->hasMany(Seguimento::class);
    }
    
    public function Conversa(): HasMany {
        return $this->hasMany(Conversa::class);
    }

    public function Necessidade(): HasMany {
        return $this->hasMany(Necessidade::class);
    }

    public function RepresentanteLegal(): BelongsTo {
        return $this->belongsTo(RepresentanteLegal::class, "representante_id", "id");
    }

    public function Notificacao(): HasMany {
        return $this->hasMany(Notificacao::class);
    }

    public function Passwords_Resets_ONG(): HasMany {
        return $this->hasMany(Passwords_Resets_Ong::class);
    }

    public function Persona_Access_ONG(): HasMany {
        return $this->hasMany(Persona_Access_ONG::class);
    }

    protected function DataFundacao(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => date('d/m/Y', strtotime($value)),
            set: fn (string $value) => date('Y/m/d', strtotime($value))
        );
    }  


}
