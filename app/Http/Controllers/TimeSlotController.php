<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{
    public function show(Request $request)
    {
        

        $timeslot= Movie::where([['theater_name','=', $request->theater_name],['start_time','=',$request->start_time],['end_time','=',$request->end_time]])
        ->first(['Movie_ID', 'Genre', 'Title', 'Description','Theater_name','Start_time', 'End_time','Theater_room_no']);;
        return response()->json($timeslot);
    }
}
