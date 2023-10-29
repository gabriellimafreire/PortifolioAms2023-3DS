<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDoacao extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tipo_Doacao')->insert([
            'TipoDoacao' => 'Material'
        ]);

        DB::table('Tipo_Doacao')->insert([
            'TipoDoacao' => 'Monetaria'
        ]);

    }
}
