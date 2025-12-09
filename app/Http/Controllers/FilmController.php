<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function listFilms()
    {

        $films = Film::all(); //=> SELECT * FROM films;

        return view('list', [
            'films' => $films
        ]);
    }
}
