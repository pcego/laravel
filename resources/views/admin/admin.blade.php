@extends('blog/template')

@section('content')

    <h1>Administração Blog</h1>

    <table class=“table^”>
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Ação</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->titulo}}</td>
                <td></td>
            </tr>
        @endforeach
    </table>
    {!! $posts->render() !!}
@stop