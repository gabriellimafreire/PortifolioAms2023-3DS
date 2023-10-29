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
        Schema::create('Telefone_Doador', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('doador_id');
            $table->foreign('doador_id')->references('id')->on('Doador');
            $table->string('NumeroTelefone')->min(10)->max(16);
            $table->string('Descricao')->min(10)->max(20)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Telefone_Doador');
    }
};
