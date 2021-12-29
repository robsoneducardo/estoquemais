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
        Movimento::create($request->all());
        return redirect()->route('movimento.index');
    }

    public function edit ($id){
        $movimento = Movimento::where("id", $id)->first();
        if(!empty($movimento)){
            $produtos = Produto::all();
            return view("movimento.edit", ["movimento"=>$movimento, "produtos"=>$produtos]);
        }
        else{
            $movimentos = Movimento::all();
            return redirect()->route("movimento.index");
        }
    }

    public function update(Request $request){
        $data = [
            "data" => $request->data,
            "tipo" => $request->tipo,
            "quantidade" => $request->quantidade,
            "vl_unit" => $request->vl_unit,
            "produto_id" => $request->produto_id,
        ];

        Movimento::where("id", $request->id)->update($data);

        $produtos = Produto::all();
        return redirect()->route("movimento.index");
    }

    public function destroy($id){
        Movimento::where('id', $id)->delete();
        return redirect()->route('movimento.index');
    }
}
