<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class Search_PerformerController extends Controller
{
    public function searchperformer(Request $request)
    {
        $search = request()->get('performer_name');
        $search_performer= Movie::where('performer_name', 'LIKE', "%{$search}%")
        ->first(['Movie_ID', 'Genre', 'Title', 'Description']);;
        return response()->json(array('data'=>$search_performer));
    }
}
