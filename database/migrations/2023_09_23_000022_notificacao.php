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
        Schema::create('Notification', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doador_id');
            $table->foreign('doador_id')->references('id')->on('Doador');
            $table->unsignedBigInteger('ong_id');
            $table->foreign('ong_id')->references('id')->on('Ong');
            $table->string('Informacao')->max(80);
            $table->date('Data_Notificacao');
            $table->time('Hora_Notificao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Notificacao');
    }
};
