@extends('blog/template')

@section('content')

    <h1>Blog</h1>

    @foreach($posts as $post)

        <h2>{{$post->titulo}}</h2>
        <p>{{$post->conteudo}}</p>
        <hr>

        <ul>
            @foreach($post->tags as $tag)
                <li>{{$tag->nome}}</li>
            @endforeach
        </ul>

        <h3>Comentários</h3>

        @foreach($post->comentarios as $comentario)
            <br>Nome:</br> {{$comentario->nome}}
            <br>Comentario</br> {{$comentario->comentario}}
        @endforeach

    @endforeach

@stop
