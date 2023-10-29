<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Seguimento')->insert([
            'NomeSeguimento' => 'Assistência social',
        ]);

        DB::table('Seguimento')->insert([
            'NomeSeguimento' => 'Cultura',
        ]);

        DB::table('Seguimento')->insert([
            'NomeSeguimento' => 'Saúde',
        ]);

        DB::table('Seguimento')->insert([
            'NomeSeguimento' => 'Meio ambiente',
        ]);

        DB::table('Seguimento')->insert([
            'NomeSeguimento' => 'Desenvolvimento e defesa de direitos',
        ]);

        DB::table('Seguimento')->insert([
            'NomeSeguimento' => 'Habitação',
        ]);

        DB::table('Seguimento')->insert([
            'NomeSeguimento' => 'Educação e pesquisa',
        ]);
    }
}
