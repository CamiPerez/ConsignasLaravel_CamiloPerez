@extends('layouts.mainLayout')

@section('content')

  <div class="detalle">
      <div>
          <h4>{{$actor->getFullName()}}</h4>
          @if ($actor->bestMovie)
          <p>Mejor película: {{$actor->bestMovie->title}}</p>
          @endif
          <p>Rating: {{$actor->rating}}</p>
          @if (!$actor->movies->isEmpty())
          <p>Películas:</p>
          <ul>
            @foreach ($actor->movies as $movie)
              <li>
                {{$movie->title}}
              </li>
            @endforeach
            @endif
          </ul>
        </div>
    </div>
@endsection
