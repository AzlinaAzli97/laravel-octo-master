<?php

namespace App\Http\Controllers;
use App\Models\Rating;
use Illuminate\Http\Request;

class Give_RatingController extends Controller
{
    public function create(Request $request)
    {
        $give_rating = new Rating;

        $give_rating->movie_title = $request->input('movie_title');
        $give_rating->username = $request->input('username');
        $give_rating->rating = $request->input('rating');
        $give_rating->r_description = $request->input('r_description');

        $give_rating->save();
        return response()->json(['message'=>"Successfully added review for the irishman by user: '$give_rating->username",'success'=>'true']);
        
    }
}
