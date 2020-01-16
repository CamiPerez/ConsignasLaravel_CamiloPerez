@extends('layouts.mainLayout')

@section('content')

  <div  class="detalle">
      <div>
          <h1>{{$movie->title}}</h1>
          @if ($movie->genres)
          <p>Género: {{$movie->genres->name}}</p>
          @endif
          <p>Duración: {{$movie->length}}</p>
          <p>Rating: {{$movie->rating}}</p>
          <p>Fecha de Estreno: {{$movie->release_date}}</p>
          <p>Premios: {{$movie->awards}}</p>
          @if (!$movie->actors->isEmpty())
          <p>Actores:</p>
          <ul>
            @foreach ($movie->actors as $actor)
              <li>
                {{$actor->getFullName()}}
              </li>
            @endforeach
            @endif
          </ul>
          <div>
              <form class="" action="/peliculas/{{$movie->id}}/edit" method="get">
              {{-- <input type="hidden" name="id" value="{{$movie->id}}"> --}}
              <input class="btn btn-dark button2" type="submit" name="" value="Editar Película">
              </form>
          </div>
        </div>
    </div>
@endsection
{{-- class="col-6 col-sm-6 col-md-6 col-lg-3" --}}
