<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show(Request $request)
    {

        $r_date = request()->get('r_date');
        $new_movie= Movie::select('Movie_ID', 'Genre', 'Title', 'Description','Theater_name','Start_time', 'End_time','Theater_room_no')->whereDate('start_time','>=',$r_date)->get();
        return response()->json($new_movie);
    }

    public function addmovie(Request $request)
    {

        $add_movie = new Movie;

        
        $add_movie->title = $request->input('title');
        $add_movie->release = $request->input('release');
        $add_movie->length = $request->input('length');
        $add_movie->description = $request->input('description');
        $add_movie->mpaa_rating = $request->input('mpaa_rating');
        $add_movie->genre = json_encode($request->input('genre'));
        $add_movie->director = $request->input('director');
        $add_movie->performer_name = $request->input('performer_name');

        $add_movie->save();
        return response()->json(['message'=>"Successfully added movie The King's Man with Movie_ID '$add_movie->id'",'success'=>'true']);
        
    }
}
