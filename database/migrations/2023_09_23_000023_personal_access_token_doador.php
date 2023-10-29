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
        Schema::create('Personal_Access_Token_Doador', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doador_id');
            $table->foreign('doador_id')->references('id')->on('Doador');
            $table->morphs('Token_Able');
            $table->string('Name');
            $table->string('Token');
            $table->string('Abilities');
            $table->timestamp('Last_Used_At')->nullable();
            $table->timestamp('Expires_At')->nullable();
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
        Schema::dropIfExists('Personal_Access_Token_Doador');
    }
};
