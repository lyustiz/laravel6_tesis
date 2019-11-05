@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3><span class="badge badge-primary">Productos</span></h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     
                    <a class="mb-3 btn btn-sm btn-success" href="producto/create">Nuevo</a> 

                    
                        <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>nro</th>
                                <th>Producto</th>
                                <th>Status</th>
                                <th>Usuario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->id_producto }}</td>
                                <td>{{ $producto->tipoProducto->tipo_producto }}</td>
                                <td>{{ ($producto->id_status==1)  ? 'activo': 'inactivo' }}</td>
                                <td>{{ $producto->id_usuario }}</td>
                                <td>
                                    <a class="btn btn-sm btn-danger" href="producto/{{$producto->id_producto}}/edit">Edit</a>
                                    <a class="btn btn-sm btn-warning" href="producto/{{$producto->id_producto}}">Del</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                        
                        </table>


                   

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
