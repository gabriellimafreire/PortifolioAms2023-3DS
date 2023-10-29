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
        Schema::create('Ong', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seguimento_id');
            $table->unsignedBigInteger('representante_id');
            $table->foreign('seguimento_id')->references('id')->on('Seguimento');
            $table->foreign('representante_id')->references('id')->on('Representante_Legal');
            $table->string('NomeFantasia')->min(7)->max(60);
            $table->date('DataFundacao');
            $table->string('CNPJ')->min(20)->max(20);
            $table->boolean('ativo')->default(false);
            $table->string('HoraDia')->min(15)->max(100);
            $table->string('SobreOng')->min(20)->max(90);
            $table->string('LocalFotoPerfil')->min(15)->max(50)->nullable();
            $table->string('email')->unique();
            $table->string('email_contato')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken()->nunnable();
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
        Schema::dropIfExists('Ong');
    }
};
