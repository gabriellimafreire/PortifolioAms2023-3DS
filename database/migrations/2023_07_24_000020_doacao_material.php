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
        Schema::create('Doacao_Material', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doacao_id');
            $table->unsignedBigInteger('tipo_doacao_id');
            $table->foreign('doacao_id')->references('id')->on('Doacao');
            $table->foreign('tipo_doacao_id')->references('id')->on('Tipo_Doacao');
            $table->string('Descricao')->min(20)->max(100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Doacao_Material');
    }
};
