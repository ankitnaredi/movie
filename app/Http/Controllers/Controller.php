<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Movie;
use App\Models\MovieMeta;
use App\Models\Actors;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected function getMovieMeta($movieId,$movieMetaKey){
        $movie_meta=MovieMeta::where([['movie_id','=',$movieId],['meta_key','LIKE',$movieMetaKey]])->first();
        
        return ($movie_meta)?$movie_meta->meta_value:'';
    }
    protected function insertActor($actor)
    {
        Actors::updateOrCreate(['name'=>$actor],['name'=>$actor]);
    }
    protected function insertMovieMeta($movieId,$movieMetaKey,$movieMetaValue)
    {
        MovieMeta::updateOrCreate(['movie_id'=>$movieId,'meta_key'=>$movieMetaKey,'meta_value'=>$movieMetaValue]);
    }
}
