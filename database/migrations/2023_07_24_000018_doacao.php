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
      
        Schema::create('Doacao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doador_id');
            $table->unsignedBigInteger('necessidade_id');
            $table->unsignedBigInteger('tipo_doacao_id');
            $table->foreign('doador_id')->references('id')->on('Doador');
            $table->foreign('necessidade_id')->references('id')->on('Necessidade');
            $table->foreign('tipo_doacao_id')->references('id')->on('Tipo_Doacao');
            $table->datetime('DataDoacao');
            $table->time('HoraDoacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Doacoes');
    }
};
