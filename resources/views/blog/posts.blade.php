@extends('blog/template')

@section('content')

    <h1>Blog</h1>

    @foreach($posts as $post)

        <h2>{{$post->titulo}}</h2>
        <p>{{$post->conteudo}}</p>
        <hr>

    @endforeach

@stop
