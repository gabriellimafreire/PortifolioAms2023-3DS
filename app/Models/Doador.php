<?php

namespace App\Models;

use App\Notifications\AtualizarSenha;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Doador extends User
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'Doador';

    protected $guard = 'Doador';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'Nome',
        'origem_id',
        'Endereco',
        'email',
        'email_contato',
        'EnderecoFotoPerfil'
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
    ];

    public function Telefone(): HasMany {
        return $this->hasMany(Telefone_Doador::class);
    }

    public function Preferencias() : HasMany {
        return $this->hasMany(Preferencia::class);
    }

    public function Tipo_Documento(): HasMany {
        return $this->hasMany(Tipo_Documento::class);
    }

    public function Tipo_Origem(): BelongsTo{
        return $this->belongsTo(Tipo_Origem::class, 'origem_id', 'id');
    }

    public function Notificacao(): HasMany {
        return $this->hasMany(Notificacao::class);
    }

    public function Passwords_Resets_Doador(): HasMany {
        return $this->hasMany(Passwords_Resets_Doador::class);
    }

    public function Personal_Access_Token_Doador(): HasMany {
        return $this->hasMany(Personal_Access_Token_Doador::class);
    }

    public function Doacoes(): HasMany{
        return $this->hasMany(Doacao::class);
    }


    
}

