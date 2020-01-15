<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $guarded = [];

    public function genres(){
        return $this->belongsTo(Genre::class, "genre_id");
    }

    // public function genres(){
    //   return $this->belongsTo("App\Genre", "genre_id");

    public function actors(){
        return $this->belongsToMany(Actor::class)->withPivot('movie_id');
    }

}
