@extends('layouts.app')
@section('content')

<h1>Produtos
        <a href="{{route('produto.create')}}">
            <svg width=40px height=40px viewBox="0 0 490 490">
                <g>
                        <path d="M227.8,174.1v53.7h-53.7c-9.5,0-17.2,7.7-17.2,17.2s7.7,17.2,17.2,17.2h53.7v53.7c0,9.5,7.7,17.2,17.2,17.2
                            s17.1-7.7,17.1-17.2v-53.7h53.7c9.5,0,17.2-7.7,17.2-17.2s-7.7-17.2-17.2-17.2h-53.7v-53.7c0-9.5-7.7-17.2-17.1-17.2
                            S227.8,164.6,227.8,174.1z"/>
                        <path d="M71.7,71.7C25.5,118,0,179.5,0,245s25.5,127,71.8,173.3C118,464.5,179.6,490,245,490s127-25.5,173.3-71.8
                            C464.5,372,490,310.4,490,245s-25.5-127-71.8-173.3C372,25.5,310.5,0,245,0C179.6,0,118,25.5,71.7,71.7z M455.7,245
                            c0,56.3-21.9,109.2-61.7,149s-92.7,61.7-149,61.7S135.8,433.8,96,394s-61.7-92.7-61.7-149S56.2,135.8,96,96s92.7-61.7,149-61.7
                            S354.2,56.2,394,96S455.7,188.7,455.7,245z"/>
                </g>
            </svg>
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
                        <svg viewBox="0 0 512.002 512.002">
                        <g>
                        <path d="M144.481,326.856l-20.336,61.003l61.004-20.335L487.946,64.729l-40.669-40.669L144.481,326.856z M176.691,353.837
                        l-27.782,9.261l9.261-27.782l30.15-30.15l18.521,18.521L176.691,353.837z M217.915,312.613l-18.521-18.521L447.277,46.208
                        l18.521,18.521L217.915,312.613z"/>

                        <rect x="476.435" y="-3.657" transform="matrix(0.7071 -0.7071 0.7071 0.7071 122.2284 350.5494)" width="15.66" height="62.777"/>
                        <polygon points="450.428,496.341 15.665,496.341 15.665,69.62 361.739,69.62 361.739,53.96 0.005,53.96 0.005,512.002 
                        466.089,512.002 466.089,142.226 450.428,142.226 			"/>
                        </g>
                        </svg>
                    </a>
                </td>
                <td>
                    <a href="#">
                        <svg viewBox="0 0 512 512">
                        <g transform="translate(1 1)">
                        <g>
                        <g>
                        <path d="M434.2,101.4h-13.762l5.229-30.72c0-1.707,0-4.267-1.707-5.973c-1.707-1.707-3.413-3.413-5.973-3.413l-64.628-10.44
                        L348.867,6.68C348.013,2.413,343.747-1,339.48-1L167.96,13.507c-2.56,0.853-4.267,1.707-5.973,3.413
                        c-0.853,1.707-1.707,3.413-1.707,5.973l4.305,39.463L82.627,78.36c-4.267,0.853-7.68,5.12-6.827,9.387l2.438,13.653H75.8
                        c-14.507,0-25.6,11.093-25.6,25.6v34.133c0,13.95,10.261,24.739,23.948,25.546l35.785,300.427
                        C110.787,500.76,121.88,511,135.533,511h238.933c12.8,0,24.747-10.24,25.6-23.04l35.788-301.281
                        c13.686-0.809,23.946-11.596,23.946-25.546V127C459.8,112.493,448.707,101.4,434.2,101.4z M402.627,101.4h-96.398l6.798-40.107
                        l93.867,15.36L402.627,101.4z M181.613,58.733L178.2,29.72l153.6-12.8l3.413,30.72l-28.16-4.267
                        c-4.267-0.853-8.533,2.56-9.387,6.827l-9.035,51.2h-43.416l-8.135-44.373c0-1.707-1.707-3.413-3.413-5.12
                        C231.96,50.2,229.4,50.2,226.84,50.2L181.613,58.733z M94.573,92.867l79.706-15.079c0.33-0.036,0.661-0.098,0.995-0.188
                        l6.129-1.16l39.492-7.313l5.945,32.274H95.427L94.573,92.867z M374.467,493.933H135.533c-4.267,0-8.533-3.413-8.533-8.533
                        l-0.193-1.61l-3.22-41.057h262.827L383,486.253C383,490.52,378.733,493.933,374.467,493.933z M390.25,425.667H119.832
                        L91.16,186.733h327.68L390.25,425.667z M442.733,161.133c0,5.12-3.413,8.533-8.533,8.533h-5.12H81.773H75.8
                        c-5.12,0-8.533-3.413-8.533-8.533V127c0-5.12,3.413-8.533,8.533-8.533h12.8h149.333h58.027h114.347H434.2
                        c5.12,0,8.533,3.413,8.533,8.533V161.133z"/>
                        <path d="M255,391.533c5.12,0,8.533-3.413,8.533-8.533V229.4c0-5.12-3.413-8.533-8.533-8.533c-5.12,0-8.533,3.413-8.533,8.533V383
                        C246.467,388.12,249.88,391.533,255,391.533z"/>
                        <path d="M167.96,383.853c0.853,4.267,4.267,7.68,8.533,7.68c5.12-0.853,8.533-5.12,8.533-9.387L171.373,229.4
                        c-0.853-4.267-4.267-8.533-9.387-7.68c-4.267,0.853-7.68,4.267-7.68,9.387L167.96,383.853z"/>
                        <path d="M333.507,391.533c4.267,0,8.533-3.413,8.533-7.68l13.653-152.747c0.853-5.12-2.56-9.387-7.68-9.387
                        c-5.12-0.853-9.387,2.56-9.387,7.68l-13.653,152.747C324.973,387.267,328.387,390.68,333.507,391.533z"/>
                        </g>
                        </svg>
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
