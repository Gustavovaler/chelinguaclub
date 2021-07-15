@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Nuevo Curso</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <form action="{{url('/admin/cursos')}}" class="form-group" enctype="multipart/form-data" method="POST">
                @csrf

            <label for="">Título en inglés</label><br>
            <input type="text" class="form-control" name="title"> <br>
            <label for="">Titulo en español</label><br>
            <input type="text" class="form-control" name="title_es"> <br>

            <label for="">Descripción en inglés</label><br>
            <textarea  id="" cols="30" rows="6" class="form-control" name="description">

            </textarea>
            <br>
            <label for="">Descripción en español</label><br>
            <textarea id="" cols="30" rows="6" class="form-control" name="description_es">

            </textarea>
            <br>

            <input type="file" accept="image/*" name="img">
            <hr>
            <br>
            <input type="submit" class="btn btn-success btn-block text-white" value="Crear Curso">

            </form>
            <br>
            <br>
            <br>
            <br>

        </div>
    </div>
</div>

@endsection
