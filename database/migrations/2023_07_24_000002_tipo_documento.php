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
        Schema::create('Certidao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doador_id');
            $table->foreign('doador_id')->references('id')->on('doador');
            $table->string('NumeroDocumento');
            $table->string('Descricao')->min(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Certidao');
    }
};
