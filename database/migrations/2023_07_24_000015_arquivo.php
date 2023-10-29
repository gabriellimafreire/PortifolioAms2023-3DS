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
        Schema::create('Arquivo', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('mensagem_id');
            $table->unsignedBigInteger('tipomensagem_id');
            $table->foreign('mensagem_id')->references('id')->on('Mensagem');
            $table->foreign('tipomensagem_id')->references('id')->on('Tipo_Mensagem');
            $table->string('Arquivo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Arquivo');
    }
};
