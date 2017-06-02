@extends('blog/template')

@section('content')

    @if($errors->any())

        <ul class="alert">

            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <div class="'form-group">
        <form method="POST" action="auth/login">

            {!! csrf_field() !!}
            <div>
                Email
                <input type="email" name="email" value="{{old('email')}}">

            </div>

            <div>
                Password
                <input type="password" name="password" id="password">

            </div>

            <div>

                <input type="checkbox" name="remember"> Lembrar

            </div>

            <div>

                <button type="submit">Entrar</button>

            </div>

        </form>
    </div>


@stop