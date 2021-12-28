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

<form action="{{route('movimento.store')}}" method="post">
@csrf

<table class="table">
    <thead><th><td></td><td></td></th></thead>
    <tbody>

        <tr>
            <td>
                <label for="data">Data:</label>
            </td>
            <td>
                <input type="date" name="data" id="data">
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
                <input type="number" name="quantidade" id="quantidade">
            </td>
        </tr>      

        <tr>
            <td>
                <label for="Vl unit.">Vl unit.:</label>
            </td>
            <td>
                <input type="number" name="vl_unit" id="vl_unit">
            </td>
        </tr>      

        <tr>
            <td colspan="2" class="td_command">
                <button type="submit" class="btn btn-link">
                    <svg viewBox="0 0 1000 1000" width=40>
                        <g><path d="M500,9.9C229.4,9.9,10,229.3,10,500c0,270.7,219.4,490.1,490,490.1c270.6,0,490-219.5,490-490.1C990,229.3,770.6,9.9,500,9.9z M500,928.9C263.6,928.9,71.3,736.5,71.3,500C71.3,263.5,263.6,71.1,500,71.1c236.4,0,428.7,192.4,428.7,428.9C928.7,736.5,736.3,928.9,500,928.9z M714.6,305c-19.8-13-46.3-7.4-59.3,12.5l-206.8,316L349.6,542c-17.4-16-44.5-15-60.6,2.4c-16.1,17.4-15,44.5,2.4,60.6L428,731.4l1.6,1l3.2,3.3l5.9,2.3l7,2.9l7.2,1.1l10.3-0.1l4.2-1l12-5l1.9-1.4l7.4-5.3l3.4-5.6l0.2-0.3L727,364.5C740,344.6,734.4,318,714.6,305z"/></g>
                    </svg>
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