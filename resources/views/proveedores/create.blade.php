@extends('layout.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Nuevo Proveedor</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary btn-lg" href="/proveedores"><i class="fas fa-arrow-left" style="color:white;"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>                
            @endif
            <form action="/proveedores" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la empresa" value="">
                </div>
                <div class="form-group">
                    <label for="razon-social">Razón social: </label>
                    <input type="text" class="form-control" id="razon_social" name="razon-social" placeholder="Razón social" >
                </div>
                <div class="form-group">
                    <label for="rfc">RFC: </label>
                    <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC">
                </div>
                <div class="form-group">
                    <label for="telefono">teléfono: </label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Tel.">
                </div>
                <div class="form-group">
                    <label for="correo">E-mail: </label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="e-mail">
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection