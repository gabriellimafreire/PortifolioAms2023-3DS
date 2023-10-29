<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoNecessidade extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tipo_Necessidade')->insert([
            'NomeTipoNecessidade' => 'Material',
        ]);
        DB::table('Tipo_Necessidade')->insert([
            'NomeTipoNecessidade' => 'Monetaria',
        ]);
    }
}
