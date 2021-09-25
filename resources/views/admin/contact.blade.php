@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/admin/index.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <div class="container">
        <h1>Admin</h1>
        <hr>
        <div class="row">

               <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Mensajes del formulario de registro</h1>
                        </div>
                        @foreach ($contacts as $contact)
                        <contact datos="{{$contact}}"></contact>
                    @endforeach
                    </div>
                </div>


        </div>

    </div>
@endsection
