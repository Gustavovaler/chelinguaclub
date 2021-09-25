@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/admin/index.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <div class="container">
        <h1>Admin</h1>
        <hr>
        <div class="row">
            <h1>Mensajes del formulario de registro</h1>
            @foreach ($registros as $registro )
               <div class="col-md-12">
                    <div class="card">



                        <div class="card-body">
                            <div class="wrap2">
                                <div class="datos border-r">
                                        Nombre: {{$registro->full_name}} <br> Email: {{$registro->email}}  <br> Country: {{$registro->country}}
                                </div>
                                <div class="datos">
                                        Recibido:  {{$registro->created_at}} <br> Respondido:   <br> Ref:
                                </div>
                                <div class="msg">
                                    Mensaje: <br> {{$registro->text}}
                                </div>
                                <div class="actions">

                                    <h3 class="inline"><i class="bi bi-reply"></i></h3>
                                    <h4 class="inline" style="cursor:pointer"><i class="bi bi-trash"></i></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection


