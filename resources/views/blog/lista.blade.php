@extends('blog/template')

    @section('content')
        <ul>

            @foreach($array as $nome)
                <li> {{$nome}} </li>

            @endforeach

        </ul>
    @stop