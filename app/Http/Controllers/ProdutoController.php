<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(){
        // return "Hello from produto.";
        $produtos = Produto::all();
        return view('produto.index', ['produtos'=>$produtos]);
    }
}
