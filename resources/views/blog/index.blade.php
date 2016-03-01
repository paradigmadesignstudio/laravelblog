@extends('template')


@section('title')
    Paradigma Blog
@stop


@section('content')
    <ul>
    @foreach($noticias as $noticia)
        <li>

            <h1>{{ $noticia[0] }}</h1>
            <p> {{ $noticia[1] }}</p>
            <img src="{{ $noticia[2] }}" width="150px" height="150px"></img>
        </li>
    @endforeach
    </ul>
@stop
