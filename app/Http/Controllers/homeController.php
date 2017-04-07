<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{

    public function home(){
        return view('blog.index');
    }


    public function ola($nome){

        return view('blog.ola',['nome'=> $nome]);
    }


    public function lista(){

        $array = [
            0 => 'Paulo',
            1 => 'Fasa',
            2 => 'Aluno',
            3 => 'Web'
        ];

        return view('blog.lista', compact('array'));
    }

}
