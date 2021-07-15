@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar Curso</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <form action="{{url('/admin/cursos/update/'.$curso->id)}}" class="form-group" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

            <label for="">Título en inglés</label><br>
            <input type="text" class="form-control" name="title" value="{{$curso->title}}"> <br>
            <label for="">Titulo en español</label><br>
            <input type="text" class="form-control" name="title_es" value="{{$curso->title_es}}"> <br>

            <label for="">Descripción en inglés</label><br>
            <textarea  id="" cols="30" rows="6" class="form-control" name="description" >
                {{$curso->description}}
            </textarea>
            <br>
            <label for="">Descripción en español</label><br>
            <textarea id="" cols="30" rows="6" class="form-control" name="description_es">
                {{$curso->description_es}}
            </textarea>
            <br>

            <label for="">Imagen actual </label><br>
            <img src="{{asset('/storage/'.$curso->img)}}" alt="Foto del curso" width="120px">
            <br>
            <br>
            <input type="file" accept="image/*" name="img">
            <hr>
            <br>
            <a href="{{url('/admin')}}" class="btn btn-danger btn-block ">Cancelar</a>
            <br>
            <input type="submit" class="btn btn-success btn-block text-white" value="Guardar cambios">

            </form>
            <br>
            <br>
            <br>
            <br>

        </div>
    </div>
</div>

@endsection
