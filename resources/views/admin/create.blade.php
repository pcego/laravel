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

        {!! Form::open(['route'=>'admin.store', 'method'=>'post']) !!}

        {!! Form::label('titulo', 'Título') !!}
        {!! Form::text('titulo', null, ['class'=>'form-control']) !!}

    </div>

    <div class="'form-group">
        {!! Form::label('conteudo', 'Conteudo') !!}
        {!! Form::textarea('conteudo', null, ['class'=>'form-control']) !!}

    </div>

    <div class="'form-group">

        {!! Form::submit('Cria Post', ['class'=>'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop
