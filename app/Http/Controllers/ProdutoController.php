<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produto.index', ['produtos'=>$produtos]);
    }

    public function create(){
        return view('produto.create');
    }

    public function store(Request $request){
        Produto::create($request->all());
        return redirect()->route('produto.index');
    }

    public function edit($id){
        // dd($id);
        $produto = Produto::where('id', $id)->first();
        if (!empty($produto))
            return view('produto.edit', ['produto'=>$produto]);
        else
            return redirect()->route('produto.index');
    }

    public function update(Request $request){
        $data = [
            'nome' => $request->nome,
        ];
        Produto::where('id', $request->id)->update($data);
        return redirect()->route('produto.index');
    }

}
