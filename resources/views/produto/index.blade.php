@extends('layouts.app')
@section('content')

<h1>Produtos</h1>

<div class="row">
    <div class="col-lg-4"></div>
        <div class="col-lg-4">

<table class="table">
    <thead>
        <th>Nome</th>
    </thead>
    <tbody>
        @foreach($produtos as $produto)
            <p>$produto->nome</p>
        @endforeach
    </tbody>
</table>

        </div>
    <div class="row"></div>
<div class="col-lg-4"></div>
</div>
@endsection
