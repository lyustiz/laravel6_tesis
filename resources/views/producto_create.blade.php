@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3><span class="badge badge-success">Nuevo Producto</span></h3></div>
                
                <div class="card-body">

                <form method="POST" action="{{ route('producto.store') }}">
                        @csrf



                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Tipo Producto</label>
                            <div class="col-md-6">
                            <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Tipo Producto</label>
                            <div class="col-md-6">
                            <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Tipo Producto</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('tipo_producto') is-invalid @enderror" name="name" value="{{ old('tipo_producto') }}" required>

                                @error('tipo_producto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">tipo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('producto') is-invalid @enderror" name="name" value="{{ old('producto') }}" required>

                                @error('id_usuario')
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
