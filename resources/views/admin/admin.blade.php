@extends('blog/template')

@section('content')

    <h1>Administração Blog</h1>

    <a href="{{route('admin.create')}}" class="btn btn-primary">Criar Post</a>
    <br><br>
    <table class=“table”>
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>&nbsp &nbsp Ação</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->titulo}}</td>

                <td>
                    &nbsp &nbsp<a href="{{route('admin.edit', ['id'=>$post->id])}}" class="btn btn-default">Modificar</a>
                    &nbsp &nbsp<a href="{{route('admin.delete', ['id'=>$post->id])}}" class="btn btn-danger">Deletar</a>

                </td>
            </tr>
        @endforeach
    </table>
    {!! $posts->render() !!}

@stop