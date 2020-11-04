<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function home(){
        return view('home');
    }

    public function historia(){
        return view('Cinema.historia');
    }

    public function filmes(){
        return view('Cinema.filmes');
    }
}
