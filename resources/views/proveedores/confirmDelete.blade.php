@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center align-self-end">
            <div class="col-md-auto">
            <h2>¿Desea eliminar el proveedor: {{ $report->nombre}}?</h2>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-md-auto">
                <a class="btn btn-primary btn-lg" href="/">CANCELAR</a>
            </div>
        
            <div class="col col-md-auto">
                <form action="/proveedores/{{ $report->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <div class="form-group">
                        <button class="btn btn-danger btn-lg" type="submit">ELIMINAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection