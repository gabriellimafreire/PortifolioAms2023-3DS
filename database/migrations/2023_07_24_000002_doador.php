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
        Schema::create('Doador', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('origem_id');
            $table->foreign('origem_id')->references('id')->on('Tipo_Origem');
            $table->string('Nome')->min(12)->max(60);
            $table->string('Endereco')->min(20)->max(50);
            $table->string('email')->unique();
            $table->string('email_contato')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password') ;
            $table->string('EnderecoFotoPerfil')->min(5)->max(30)->nullable();
            $table->boolean('ativo')->default(true);
            $table->rememberToken();
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
        Schema::dropIfExists('Doador');
    }
};
