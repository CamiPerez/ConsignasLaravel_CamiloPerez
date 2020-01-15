@extends('layouts.mainLayout')

@section('content')
<div class="container-fluid container">
    <div class="header">
        <h3>Nuevo Actor</h3>
    </div>
    <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-8">
                <form class="" action="/actores" method="post" enctype="multipart/form-data">
                @csrf

                    <div class="row">
                        <div class="col-11 col-sm-12 col-md-10 col-lg-11 inputregister">
                        <label for="first_name">Nombre</label>
                        <input type="text" name="first_name" value="{{old('first_name')}}"><br>
                        <p>{{$errors->first('first_name')}}</p>
                        </div>

                        <div class="col-11 col-sm-12 col-md-10 col-lg-11 inputregister">
                        <label for="last_name">Apellido</label>
                        <input type="text" name="last_name" value="{{old('last_name')}}"><br>
                        <p>{{$errors->first('last_name')}}</p>
                        </div>

                        <div class="col-11 col-sm-12 col-md-10 col-lg-11 inputregister">
                        <label for="rating">Rating</label>
                        <input type="number" name="rating" value="{{old('rating')}}"><br>
                        <p>{{$errors->first('rating')}}</p>
                        </div>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-2">
                        <button type="submit" class="button2">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>

    </div>
</div>
@endsection
