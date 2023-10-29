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

        Schema::create('Necessidade', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ong_id');
            $table->foreign('ong_id')->references('id')->on('Ong');
            $table->string('NomeNecessidade')->min(10)->max(30);
            $table->unsignedBigInteger('tipo_necessidade_id');
            $table->foreign('tipo_necessidade_id')->references('id')->on('Tipo_Necessidade');
            $table->string('Categoria')->min(15)->max(30);
            $table->text('descricao')->min(20)->max(70);
            $table->integer('quantidade')->nullable();
            $table->integer('meta');
            $table->boolean("ativo")->default(true);
            $table->string('CaminhoFotosNecessidade')->min(5)->max(50)->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Necessidade');
    }
};
