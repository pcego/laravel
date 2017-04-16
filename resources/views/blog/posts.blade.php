@extends('blog/template')

@section('content')

    <h1>Blog</h1>

    @foreach($posts as $post)

        <h2>{{$post->titulo}}</h2>
        <p>{{$post->conteudo}}</p>
        <hr>
        @foreach($post->tags as $tag)
           <ul>
               <li>{{$tag}}</li>
           </ul>
        @endforeach

        @foreach($post->comentarios as $comentario)
            <h3>Comentários</h3>
            <b>Nome:</b> {{$comentario->nome}} <br>
            <b>Comentario:</b> {{$comentario->comentario}}
        @endforeach

    @endforeach

@stop
