@extends('template')


@section('title')
    Not&iacutecias da Paradigma
@stop


@section('content')
    <ul>
    @foreach($titulo as $noticia)
        <li>
            <h1>{{ $noticia[0] }}</h1>
            <p> {{ $noticia[1] }}</p>

        </li>
        @endforeach
    </ul>
@stop
