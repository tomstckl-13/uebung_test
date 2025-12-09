<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class RestController extends Controller
{
    //

    public function index(Request $request)
    {
        $films = Film::all();

        $response = [];

        $data = [];

        foreach($films as $film)
        {
            $data = [
                'id' => $film->id,
                'title' => $film->title,
                'duration' => $film->duration,
                'oscar' => $film->oscar
            ];
        }

        $response['success'] = true;
        $response['items'] = $data;

        return response()->json($response, 200);

    }
}
