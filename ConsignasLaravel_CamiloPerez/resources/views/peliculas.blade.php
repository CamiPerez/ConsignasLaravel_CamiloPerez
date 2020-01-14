@extends('layouts.mainLayout')

@section('content')

   <div class="col-8 buscador">
     <div class="row">

             @foreach ($movies as $movie)
              <a href="{{ url('peliculas/' . $movie->id)}}"><h3><b>{{$movie->title}}</b></h3></a>
             @endforeach
               {{ $movies->links() }}
     </div>
       </section>
     </div>
@endsection
