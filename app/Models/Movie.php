<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'year',
        'rated',
		'released',
        'runtime',
        'genre',
		'director',
        'writer',
        'actors',
		'plot',
        'metascore',
        'imdbRating',
		'imdbVotes',
        'imdbID',
        'type',
		'DVD',
        'boxOffice',
        'production',
		'website',
		'response',
        'is_premium_content',
        'rent_price',
        'rent_period',
        'tags'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $table = 'movies';
    protected $hidden = [
        'created_at','updated_at'
       ];

}
