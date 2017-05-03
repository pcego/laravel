@extends('blog/template')

@section('content')
    <div class="'form-group">

        @if($errors->any())

            <ul class="alert">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['admin.update', $post->id], 'method'=>'put']) !!}

        {!! Form::label('titulo', 'Título') !!}
        {!! Form::text('titulo', $post->titulo, ['class'=>'form-control']) !!}

    </div>

    <div class="'form-group">
        {!! Form::label('conteudo', 'Conteudo') !!}
        {!! Form::textarea('conteudo', $post->conteudo, ['class'=>'form-control']) !!}

    </div>

    <div class="'form-group">

        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop