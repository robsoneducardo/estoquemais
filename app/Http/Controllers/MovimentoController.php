<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Movimento;

class MovimentoController extends Controller
{
    public function index(){
        // dd(Movimento::all());
        $movimentos = Movimento::all()->sortBy("data");
        $produtos = Produto::all();

        foreach ($movimentos as $movimento){
            $movimento->nome_produto = "teste";
        }

        return view("movimento.index", ['movimentos'=>$movimentos]);
    }

    public function create(){
        $produtos = Produto::all();
        return view("movimento.create", ['produtos'=>$produtos]);
    }

    public function store(Request $request){
        // dd("executing MovimentoController.store()");
        // dd($request);
        Movimento::create($request->all());
        return redirect()->route('movimento.index');
    }

    public function edit ($id){
        $movimento = Movimento::where("id", $id)->first();
        if(!empty($movimento))
            return view("movimento.edit", ["id"=>$id]);
        else
            return redirect()->route("movimento.index");
    }

    public function update(Request $request){

    }
}
