<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('index');
    }
    public function saibaMais(){
        return view('saibaMais');
    }
    public function curso(){
        return view('curso');
    }
    //Após autenticação
    public function cadastrar(){
        return view('events.cadastrar');
    }
    public function avaliacao(){
        return view('events.avaliacao');
    }
    public function inscritos(){
        return view('events.inscritos');
    }
}
