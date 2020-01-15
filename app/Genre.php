<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model

  {
      public $table = 'genres';
      public $guarded = [];

      // public function movies(){
      //     return $this->hasMany(Movie::class, "id");
      // }

      public function movies(){
        return $this->hasMany("App\Movie", "genre_id");
      }
  }
