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
    public function cadastrar(){
        return view('events.cadastrar');
    }
}
