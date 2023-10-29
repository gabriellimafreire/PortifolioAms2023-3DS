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
        Schema::create('Preferencia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seguimento_id')->nullable();
            $table->unsignedBigInteger('doador_id');
            $table->foreign('seguimento_id')->references('id')->on('Seguimento');
            $table->foreign('doador_id')->references('id')->on('Doador');
            $table->string('Seguimento')->min(19)->max(60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Preferencias');
    }
};
