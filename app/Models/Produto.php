<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'quantidade',
        'categoria_id',
        'fornecedor_id'];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class);
    }

    public function comprasProduto(){

        return $this->belongsToMany(Compras::class, 'compra_produtos', 'produtos_id', 'compras_id')
                        ->withPivot('quantidade', 'preco')
                        ->withTimestamps();
    }
}
