<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use App\Http\Controllers\TimeslotController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\Specific_Movie_TheaterController;
use App\Http\Controllers\Search_PerformerController;
use App\Http\Controllers\MovieController;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movie';
    protected  $fillable = ['Title','Genre','Description','Theater_name','Start_time','End_time','Theater_room_no','performer_name','release','length','mpaa_rating','director'];
}
