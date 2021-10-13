<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table='movies';
    protected $fillable = ['title', 'overview', 'genres', 'poster_path', 'date_release'];
}
