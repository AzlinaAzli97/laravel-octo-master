<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Give_RatingContoller;
class Rating extends Model
{
    use HasFactory;
    protected $table = 'rating';
    protected  $fillable = ['movie_title','username','rating','r_description'];
}
