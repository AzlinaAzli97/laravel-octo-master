<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class Specific_Movie_TheaterController extends Controller
{
    public function show(Request $request)
    {
        $d_date = request()->get('d_date');
        $specific= Movie::where([['theater_name','=', $request->theater_name]])
        ->whereDate('start_time','=',$d_date)
        ->first(['Movie_ID', 'Genre', 'Title', 'Description','Theater_name','Start_time', 'End_time','Theater_room_no']);;
        return response()->json($specific);
    }
}
