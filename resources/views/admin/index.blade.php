@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Admin</h1>

    <hr>

    <div class="row">
        <div class="col-md-12 ">

            <div class="card">
                <div class="card-header">
                    <h1>Cursos</h1>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-content-center">
                        <h3>Acciones:</h3> <a href="{{url('/admin/cursos')}}" class="btn btn-info text-white ml-5">Crear nuevo curso</a>
                    </div>
                    <div class="table-content pt-4 pl-2 ">
                        <div class="row">
                                @foreach ($cursos  as $curso)
                                <div class="col-md-4">
                                    <div class="card shadow-sm mb-2">
                                        <div class="card-header">
                                            <h3>{{$curso->title}}</h3>
                                        </div>
                                        <div class="card-body">
                                            <img src="{{asset('/storage/'.$curso->img)}}" alt="" width="100%">
                                            <hr>
                                            <p>
                                                {{$curso->description}}
                                            </p>
                                            <hr>
                                            <div class="p-1 float-right">
                                                <a href="{{url('/admin/cursos/edit/'.$curso->id)}}"class="btn btn-secondary">Editar</a>
                                                <form action="{{url('/admin/cursos/'.$curso->id)}}" style="display: inline" method="POST" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit"class="btn btn-danger" value="Eliminar">
                                                </form>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach

                        </div>




                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h1>Precios</h1>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h1>Tarjetas Home</h1>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
