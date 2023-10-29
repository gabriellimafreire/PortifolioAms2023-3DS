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
        Schema::create('Mensagem', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('conversa_id');
            $table->unsignedBigInteger('tipo_mensagem_id');
            $table->foreign('conversa_id')->references('id')->on('Conversa');
            $table->foreign('tipo_mensagem_id')->references('id')->on('Tipo_Mensagem');
            $table->date('Data');
            $table->time('Hora_mensagem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mensagem');
    }
};
