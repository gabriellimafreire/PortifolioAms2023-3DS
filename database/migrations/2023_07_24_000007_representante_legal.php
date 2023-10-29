<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Representante_Legal', function (Blueprint $table) {
            $table->id();
            $table->string('NomeCompleto')->min(11)->max(40);
            $table->date('DataNascimento');
            $table->string('CPF')->min(15)->max(16);
            $table->string('RG')->min(12)->max(14);
            $table->string('Endereco')->min(20)->max(70);
            $table->string('email')->unique();
            $table->string('NomeFotoPerfil')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Representante_Legal');
    }
};
