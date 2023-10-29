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
        Schema::create('Conversa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doador_id');
            $table->unsignedBigInteger('id_ong');
            $table->foreign('doador_id')->references('id')->on('Doador');
            $table->foreign('id_ong')->references('id')->on('Ong');
            $table->date('Data_Inicio');
            $table->time('Tempo');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Conversa');
    }
};
