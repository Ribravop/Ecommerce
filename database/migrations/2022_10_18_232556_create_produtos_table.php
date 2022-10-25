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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 100);
            $table->string("descricao");
            $table->float("preco");
            $table->integer("quantidade");
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('fornecedor_id')->constrained('fornecedores');
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
        Schema::dropIfExists('produtos');
    }
};
//$table->increments('id');
// $table->unsignedInteger("categoria_id");
// $table->foreign("categoria_id")
//         ->references("id")
//         ->on("categorias");
// $table->unsignedInteger("fornecedor_id");
// $table->foreign("fornecedor_id")
//         ->references("id")
//         ->on("fornecedores");
