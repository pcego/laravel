<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'post_id',
        'nome',
        'email',
        'comentario',

    ];

    public function post(){
        return $this->belongsTo('App\Post');
    }
}
