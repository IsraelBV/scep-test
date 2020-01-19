@extends('layout.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Editar proveedor {{ $report->id}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary btn-lg" href="/"><i class="fas fa-arrow-left" style="color:white;"></i></a>
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
            <form action="/proveedores/{{ $report->id}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $report->nombre}}">
                </div>
                <div class="form-group">
                    <label for="razon-social">Razón social: </label>
                    <input type="text" class="form-control" id="razon_social" name="razon-social" value="{{ $report->razon_social}}" >
                </div>
                <div class="form-group">
                    <label for="rfc">RFC: </label>
                    <input type="text" class="form-control" id="rfc" name="rfc" value="{{ $report->rfc}}">
                </div>
                <div class="form-group">
                    <label for="telefono">teléfono: </label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" value="{{ $report->telefono}}">
                </div>
                <div class="form-group">
                    <label for="correo">E-mail: </label>
                    <input type="email" class="form-control" id="correo" name="correo" value="{{ $report->correo}}">
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection