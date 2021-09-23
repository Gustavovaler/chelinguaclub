@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear tarjeta de pricing</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <form action="{{url('/admin/pricing')}}" method="POST" class="form-group">
                    @csrf

                    <label for="">Precio</label>
                    <input type="number" class="form-control" name="price">
                    <br>
                    <label for="">Moneda</label>
                    <select name="currency" id="" class="form-control">
                        <option value="US$">US$</option>
                        <option value="€">€</option>
                        <option value="Ars.">Ars.</option>
                    </select>
                    <br>
                    <label for="">Titulo del paquete</label>
                    <input type="text" class="form-control" name="titulo">
                    <br>
                    <label for="">Item 1</label>
                    <input type="text" class="form-control" name="item1" maxlength="33">
                    <br>
                    <label for="">Item 2</label>
                    <input type="text" class="form-control" name="item2" maxlength="33">
                    <br>
                    <label for="">Item 3</label>
                    <input type="text" class="form-control" name="item3" maxlength="33">
                    <br>
                    <label for="">Item 4</label>
                    <input type="text" class="form-control" name="item4" maxlength="33">
                    <br>
                    <label for="">Item 5</label>
                    <input type="text" class="form-control" name="item5" maxlength="33">
                    <br>
                    <label for="">Titulo oferta</label>
                    <input type="text" class="form-control" name="offer">
                    <br>
                    <label for="">Nota al pie</label>
                    <input type="text" class="form-control" name="footer">
                    <br>
                    <br>
                    <label for="">Idioma de esta tarjeta</label>
                    <input type="radio" class="" name="lang" value="1" required> Español --
                    <input type="radio" class="" name="lang" value="0" required>Ingles
                    <br>
                    <label for="">Color de fondo</label>
                    <br>
                    <label for="" style="background-color: #4db6ac"> ..... </label> <input type="radio" name="color"  value="#4db6ac"><br>
                    <label for="" style="background-color: #385898"> ..... </label> <input type="radio" name="color" value="#385898"><br>
                    <label for="" style="background-color: #f66d9b"> ..... </label> <input type="radio" name="color" value="#f66d9b"><br>
                    <label for="" > ..... </label> <input type="radio" name="color" value="#ffffff">

                    <hr>
                    <br>

                    <input type="submit" class="btn btn-success btn-block" value="Guardar pricing">

                </form>
                <br><br><br>
            </div>
        </div>
    </div>
@endsection
