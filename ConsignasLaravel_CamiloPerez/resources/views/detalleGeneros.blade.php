@extends('layouts.mainLayout')

@section('content')

  <div>
      <div>
          <h4>{{$genre->name}}</h4>
          <ul>
            @foreach ($genre->  movies as $movie)
              <li>
                <a href="{{ url('peliculas/' . $movie->id)}}"><h3><b>{{$movie->title}}</b></h3></a>
              </li>
            @endforeach
            {{-- {{ $genre->links() }} --}}
          </ul>
        </div>
    </div>
@endsection
