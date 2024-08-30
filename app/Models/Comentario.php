<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    public function user(){
        //Comentario pertence a somente um usuário
        return $this->belongsTo('App\Models\User');
    }
}
