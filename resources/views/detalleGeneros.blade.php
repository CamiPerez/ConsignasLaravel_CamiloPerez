@extends('layouts.mainLayout')

@section('content')

  <div class = "detalle">
      <div>
          <h1>{{$genre->name}}</h1>
          <ul>
            @foreach ($genre->  movies as $movie)
              <li>
                <a href="{{ url('peliculas/' . $movie->id)}}"><h3>{{$movie->title}}</h3></a>
              </li>
            @endforeach
            {{-- {{ $genre->links() }} --}}
          </ul>
        </div>
    </div>
@endsection
