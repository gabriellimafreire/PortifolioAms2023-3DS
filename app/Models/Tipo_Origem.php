<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Origem extends Model
{
    use HasFactory;

    protected $table = 'Tipo_Origem';

    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'DataFundNasc',
        'Descricao'
    ];

    protected function DataFundNasc(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => date('d/m/Y', strtotime($value)),
            set: fn (string $value) => date('Y/m/d', strtotime($value))
        );
    }  

}
