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
}
