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

  public function edit(Movie $movie)
  {
    // $this->authorize('edit', $event);

      return view('movies.edit')->with("movie", $movie);
  }

  public function update(Request $request, $movie)
  {
    $reglas = [
      "title" => "string|min:1|max:255",
      "rating"=> "required|numeric|min:0|max:10",
      "genre_id" => "required|numeric|integer|min:1|max:12",
      "release_date" => "required|date",
      "length"=>"required|numeric|integer|min:1|max:999",
      "awards"=>"required|numeric|integer|min:0|max:999",
    ];
    $mensaje = [
      "required" => "El campo :attribute es obligatorio.",
      "min" => "El campo :attribute no puede ser menor a :min.",
      "max" => "El campo :attribute no debe mayor a :max.",
      "numeric" => "El campo :attribute debe ser numérico.",
      "integer" => "El campo :attribute debe ser entero.",
      "date" => "El campo :attribute debe ser una fecha."
    ];

    $this->validate($request, $reglas, $mensaje);
    $movieEdited = new Movie();

    $movieEdited->title=$request["title"];
    $movieEdited->rating=$request["rating"];
    $movieEdited->release_date=$request["release_date"];
    $movieEdited->genre_id=$request["genre_id"];
    $movieEdited->length=$request["length"];
    $movieEdited->awards=$request["awards"];


  $arrayEdited = $movieEdited->toArray();


      Movie::find($movie)->update($arrayEdited);
      return view('/detallePelicula')->with("movie", $movieEdited);

  }
}
