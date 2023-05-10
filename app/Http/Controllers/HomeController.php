<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function filmes()
{
    $filmes = [
        'Star Wars',
        'Harry Potter',
        'Senhor dos Anéis',
        'Vingadores'
    ];

    return view('filmes', compact('filmes'));
}

}

