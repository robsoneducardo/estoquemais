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
                    <a href="#">
                        <img src="{{asset('icons/delete.svg')}}" alt="">                    
                    </a>
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
