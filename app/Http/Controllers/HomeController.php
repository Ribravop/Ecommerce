<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $produtos = Produto::orderBy("nome")->get();

        return view('site.home', compact('produtos'));
    }

    public function detalhe($id){
        $produto = Produto::find0rFail($id);

        return view('site.produtos', compact('produtos'));
    }
}
