<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Database\QueryException;


class GenreController extends Controller
{
    public function show(Request $request)
    {
        // $movie= Movie::where('genre','=', $request->genre)
        // ->first(['Movie_ID', 'Genre', 'Title', 'Description']);;
        // return response()->json($movie);

        $movie= Movie::select('Movie_ID', 'Genre', 'Title', 'Description')->where('genre','=', $request->genre)->get();
        return response()->json($movie);
    }
}
