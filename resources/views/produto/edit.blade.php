@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4">

<h1>Alterando Produto
<a href="{{route('produto.index')}}">
        <svg width=40px height=40px viewBox="0 0 384.97 384.97">
            <g>
                <path d="M192.485,0C86.185,0,0,86.185,0,192.485C0,298.797,86.173,384.97,192.485,384.97S384.97,298.797,384.97,192.485
                    C384.97,86.185,298.797,0,192.485,0z M192.485,361.282c-92.874,0-168.424-75.923-168.424-168.797S99.611,24.061,192.485,24.061
                    s168.424,75.55,168.424,168.424S285.359,361.282,192.485,361.282z"/>
                <path d="M235.878,99.876c-4.704-4.74-12.319-4.74-17.011,0l-83.009,84.2c-4.572,4.62-4.584,12.56,0,17.191l82.997,84.2
                    c4.704,4.74,12.319,4.74,17.011,0c4.704-4.752,4.704-12.439,0-17.191l-74.528-75.61l74.54-75.61
                    C240.57,112.315,240.57,104.628,235.878,99.876z"/>
            </g>
        </svg>
    </a>
</h1>

<form action="{{route('produto.update', ['id'=>$produto->id])}}" method="post">
@csrf
@method('PUT')

<table class="table">
    <thead><th><td></td><td></td></th></thead>
    <tbody>
        <tr>
            <th>
                <label for="nome">Nome:</label>
            </th>
            <th>
                <input type="text" class="form-control" name="nome" value="{{$produto->Nome}}">
            </th>
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