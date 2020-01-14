<?php

namespace App\Http\Controllers;

use App\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
  public function index(){
      $movies = Movie::orderBy('title')->paginate(5);
      return view("peliculas")->with("movies", $movies);
  }

  public function show(Movie $movie){
    return view("detallePelicula")->with("movie", $movie);
  }

}
