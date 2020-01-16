<?php

namespace App\Http\Controllers;
Use App\Genre;

use Illuminate\Http\Request;

class GenreController extends Controller
{
  public function index(){
      $genres = Genre::orderBy('name')->paginate(5);
      return view("generos")->with("genres", $genres);
  }

  public function show(Genre $genre){
        return view("detalleGeneros")->with("genre", $genre);
  }

  public function main()
  {
      $genres = Genre::all();
      return view("index")->with("genres", $genres);
  }

}
