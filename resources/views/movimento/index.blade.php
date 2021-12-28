@extends('layouts.app')
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th colspan="5">
                Movimentos de Mercadoria
                <a href="{{route('movimento.create')}}">
                    <img src="{{asset('icons/add.svg')}}" alt="">
                </a>
            </th>
        </tr>
        <tr>
            <td>Data</td>
            <td>Produto</td>
            <td>Tipo</td>
            <td>Quantidade</td>
            <td>Vl_unit</td>
            <td>Total</td>
        </tr>
    </thead>
    <tbody>
        @foreach($movimentos as $movimento)
            <tr>
                <td>{{$movimento->data}}</td>
                <td>{{$movimento->produto->Nome}}</td>
                <td>{{$movimento->tipo}}</td>
                <td>{{$movimento->quantidade}}</td>
                <td>{{$movimento->vl_unit}}</td>
                <td>{{$movimento->vl_unit * $movimento->quantidade}}</td>
                <td>
                    <a href="{{route('movimento.edit', ['id'=>$movimento->id])}}">
                        <img src="{{asset('icons/edit.svg')}}" alt="editar">
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot></tfoot>
</table>

@endsection
