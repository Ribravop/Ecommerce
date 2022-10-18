<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    use HasFactory;
}


public function up() 
{
    schema::create ('fornecedor', function (Blueprint $table)
    {
        $table->id();
        $table->string("nome");
        $table->string("descricao")
        $table->float("preco");
        $table->integer("quantidade");
        $table->timestamp();

        $table->unsingnedInteger("categoria_id");
        $table->foreign("categoria_id")
        ->references("id")
        ->on("categorias");
        $table->usingnedInteger("fornecedor_id");
        $table->foreign("fornecedor_id")
        ->references("id")
        ->on("fornecedores");
    })
}