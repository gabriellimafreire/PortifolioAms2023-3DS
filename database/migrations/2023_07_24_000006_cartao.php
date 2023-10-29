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
        Schema::create('Cartao', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('doador_id');
            $table->foreign('doador_id')->references('id')->on('Doador');
            $table->string('NumeroCartao');
            $table->string('CVV')->min(16)->max(16);
            $table->string('NomeTitular')->min(8)->max(40);
            $table->date('DataValidade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cartao');
    }
};
