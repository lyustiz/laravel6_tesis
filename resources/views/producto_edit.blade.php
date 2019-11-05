@extends('layouts.app')

@section('content')
<div class="container">
{{$producto}}


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3><span class="badge badge-success">Venta</span></h3></div>
                
                <div class="card-body">

                <form method="POST" action="{{ route('producto.store') }}">
                        @csrf

                        <!--para los select -->
                        <div class="form-group row">
                            <label for="tipo_producto" class="col-md-4 col-form-label text-md-right">Tipo Producto</label>
                            <div class="col-md-6">
                            <select class="form-control" name="tipo_producto" id="tipo_producto" require>
                                <option value="" selected>Seleccione..</option>
                                @foreach ($tipoProductos as $tipoProducto)
                                <option value="{{$tipoProducto->id_tipo_producto}}">{{$tipoProducto->tipo_producto}}</option>
                                @endforeach
                            </select>

                            @error('tipo_producto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <!--para los campos -->
                        <div class="form-group row">
                            <label for="cantidad" class="col-md-4 col-form-label text-md-right">Cantidad</label>

                            <div class="col-md-6">
                                <input id="cantidad" type="text" class="form-control @error('cantidad') is-invalid @enderror" name="cantidad" value="{{ old('tipo_producto') }}" required>

                                @error('cantidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                                                 
                        <div class="form-group row mb-0">

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-sm btn-success">
                                    Crear
                                </button>

                                <a href="{{url('producto')}}" class="btn btn-sm btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>
                
                
                
                </div>
                   

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
