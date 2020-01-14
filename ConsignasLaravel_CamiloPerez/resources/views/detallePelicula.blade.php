@extends('layouts.mainLayout')

@section('content')

  <div>
      <div>
          <h4>{{$movie->title}}</h4>
          @if ($movie->genres)
          <p>Género: {{$movie->genres->name}}</p>
          @endif
          <p>Duración: {{$movie->length}}</p>
          <p>Rating: {{$movie->rating}}</p>
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
        </div>
    </div>
@endsection
