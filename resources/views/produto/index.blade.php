@extends('layouts.app')
@section('content')

<h1>Produtos
        <a href="{{route('produto.create')}}">
            <img class="icon" src="{{asset('icons/add.svg')}}" alt="">
        </a>
</h1>


<div class="row">
    <div class="col-lg-4"></div>
        <div class="col-lg-4">

<table class="table">
    <thead>
        <th>Nome</th>
        <th colspan=2>Ações</th>
    </thead>
    <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{{$produto->Nome}}</td>

                <td>
                    <a href="{{route('produto.edit', ['id'=>$produto->id])}}">
                        <img src="{{asset('icons/edit.svg')}}" alt="">
                    
                    </a>
                </td>
                <td>
                    <form action="{{route('produto.destroy', ['id' => $produto->id])}}"
                            method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bnt bnt-link" 
                                onclick="return confirm('Deseja excluir {{$produto->Nome}}?')">
                            <img src="{{asset('icons/delete.svg')}}" alt="">
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

        </div>
    <div class="row"></div>
<div class="col-lg-4"></div>
</div>
@endsection
