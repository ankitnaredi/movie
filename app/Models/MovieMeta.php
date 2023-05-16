<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieMeta extends Model
{
    use HasFactory;
	protected $fillable = [
        'movie_id',
        'meta_key',
        'meta_value',
		'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $table = 'movie_metas';
    protected $hidden = [
        'created_at','updated_at'
       ];
}
