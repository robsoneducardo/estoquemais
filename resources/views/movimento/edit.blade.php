@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4">

<h1>Novo Movimento
<a href="{{route('movimento.index')}}">
    <img class="icon" src="{{asset('icons/back.svg')}}" alt="">
    </a>
</h1>

<form action="{{route('movimento.update', ['id'=>$movimento->id])}}" method="post">
@csrf
@method('PUT')

<table class="table">
    <thead><th><td></td><td></td></th></thead>
    <tbody>

        <tr>
            <td>
                <label for="data">Data:</label>
            </td>
            <td>
                <input type="date" name="data" id="data"
                        value="{{$movimento->data}}">
            </td>
        </tr>

        <tr>
            <td>
                <label for="nome">Produto:</label>
            </td>
            <td>
                <select name="produto_id" id="produto_id">
                @foreach($produtos as $produto)
                    <option value="{{$produto->id}}">{{$produto->Nome}}</option>
                @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td>
                <label for="tipo">Tipo:</label>
            </td>
            <td>
                <select name="tipo" id="tipo">
                <option value="Entrada">Entrada</option>
                <option value="Saída">Saída</option>
                </select>
            </td>
        </tr>      

        <tr>
            <td>
                <label for="quantidade">Quantidade:</label>
            </td>
            <td>
                <input type="number" name="quantidade" id="quantidade"
                        value="{{$movimento->quantidade}}">
            </td>
        </tr>      

        <tr>
            <td>
                <label for="Vl unit.">Vl unit.:</label>
            </td>
            <td>
                <input type="number" name="vl_unit" id="vl_unit"
                        value="{{$movimento->vl_unit}}">
            </td>
        </tr>      

        <tr>
            <td colspan="2" class="td_command">
                <button type="submit" class="btn btn-link">
                    <img src="{{asset('icons/ok.svg')}}" alt="">
                </button>
            </td>
        </tr>  
    </tbody>
</table>

</form>

</div>
<div class="col-lg-4"></div>
</div:row>

@endsection