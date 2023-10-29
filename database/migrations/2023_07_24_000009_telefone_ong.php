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
        Schema::create('Telefone_ONG', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ong_id');
            $table->foreign('ong_id')->references('ID')->on('Ong');
            $table->string('NumeroTelefone')->min(10)->max(16);
            $table->string('Descricao');
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
        Schema::dropIfExists('Telefone_ONG');
    }
};
