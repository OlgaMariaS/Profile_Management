<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    //Permite que haja updates sem restrições
    protected $guarded = [];

    public function user(){
        //Tabela pessoa pertence a somente um usuário
        return $this->belongsTo('App\Models\User');
    }
}
