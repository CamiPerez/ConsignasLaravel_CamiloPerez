@extends('layouts.mainLayout')

@section('content')
  <div class="container-fluid container">
      <div class="header">
          <h3>Editar película</h3>
      </div>
      <div class="row">
          <div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
              <div class="col-10 col-sm-10 col-md-10 col-lg-8">
              <form class="" action="/movies/{{$movie->id}}" method="post" enctype="multipart/form-data">
                  @method('PATCH')
                      @csrf

                           <div class="col-11 col-sm-12 col-md-10 col-lg-11 inputregister">
                           <label for="title">Título</label>
                           {{$movie->title}}<br/>
                           <input type="text" name="title" value="{{old('title')}}"><br>
                          <p>{{$errors->first('title')}}</p>
                           </div>

                          <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                          <label for="rating">Rating</label>
                          {{$movie->rating}}<br/>
                          <input type="text" name="rating" value="{{old('rating')}}"><br>
                          <p>{{$errors->first('rating')}}</p>
                          </div>

                          <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                          <label for="genre_id">Género</label>
                          {{$movie->genre_id}}<br/>
                          <input type="number" name="genre_id" value="{{old('genre_id')}}"><br>
                          <p>{{$errors->first('genre_id')}}</p>
                          </div>

                          <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                          <label for="release_date">Fecha de Estreno</label>
                          {{$movie->release_date}}<br/>
                          <input type="date" name="release_date" value="{{old('release_date')}}"><br>
                          <p>{{$errors->first('release_date')}}</p>
                          </div>

                          <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                          <label for="length">Duración</label>
                          {{$movie->length}}<br/>
                          <input type="number" name="length" value="{{old('length')}}"><br>
                          <p>{{$errors->first('length')}}</p>
                          </div>

                          <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                          <label for="awards">Premios</label>
                          {{$movie->awards}}<br/>
                          <input type="number" name="awards" value="{{old('awards')}}"><br>
                          <p>{{$errors->first('awards')}}</p>
                          </div>



                      <div class="row">
                          <div class="col-6 col-sm-6 col-md-6 col-lg-2">
                          <button type="submit" class="button2">Guardar</button>
                          </div>
                      </div>
                  </form>
              </div>

      </div>
  </div>
@endsection
