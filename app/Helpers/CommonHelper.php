<?php
namespace App\Helpers;
use App\Models\Movie;
use App\Models\MovieMeta;
class CommonHelper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }
	public static function getAllMovies()
	{
		return Movie::count();
	}
	public static function getPremiumMovies()
	{
		return Movie::where('is_premium_content','LIKE','yes')->count();
	}
	public static function getNonMovies()
	{
		return Movie::where('is_premium_content','LIKE','no')->count();
	}
	public static function getMovieMeta($movieId,$movieMetaKey){
        $movie_meta=MovieMeta::where([['movie_id','=',$movieId],['meta_key','LIKE',$movieMetaKey]])->first();
        return $movie_meta;
        return ($movie_meta)?$movie_meta->meta_value:'';
    }
}
?>