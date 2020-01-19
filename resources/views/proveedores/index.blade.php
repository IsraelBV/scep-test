@extends('layout.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Proveedores</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="proveedores/create" class="btn btn-primary btn-lg"> 
                <i class="fas fa-plus" style="color:white;"></i>
            </a>    
        </div>
    </div>
    {{-- <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/create">Create a new report</a>
        </div>
    </div> --}}
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>
                            Nombre
                        </th>
                        
                        <th>
                            Razon Social                       
                        </th>
                        <th>
                            Rfc                      
                        </th>
                        <th>
                            Telefono                      
                        </th>
                        <th>
                            Correo                      
                        </th>
                        <th>
                            Editar                  
                        </th>
                        <th>
                            Eliminar
                        </th>                        
                    </tr>
                <thead>
                @foreach($proveedores as $proveedor)
                <tbody>
                    <tr>
                        <td>
                            {{ $proveedor->nombre}}
                        </td>
                        <td>
                            {{ $proveedor->razon_social}}                       
                        </td>
                        <td>
                            {{ $proveedor->rfc}}                       
                        </td>
                        <td>
                            {{ $proveedor->telefono}}                       
                        </td>
                        <td>
                            {{ $proveedor->correo}}                       
                        </td>
                        <td>
                            <a href="/proveedores/{{ $proveedor->id }}/edit" class="btn btn-warning">
                                <i class="fas fa-edit" style="color:white;"></i>
                            </a>                        
                        </td>
                        <td>
                            <a href="/proveedores/{{ $proveedor->id }}/confirmDelete" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection