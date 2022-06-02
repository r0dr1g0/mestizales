@extends('layouts.admintemplate')
@section('contenido')

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>REGISTRO DE PRODUCTOS</h4>
                {{-- <span class="ml-1">Datatable</span> --}}
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('producto.index') }}">Productos</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Registro Productos</a></li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    <h4 class="card-title">NUEVO</h4>
                </center>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    {!! Form::open(['route' => 'producto.store', 'method' => 'POST']) !!}
                    <div class="row">

                        <div class="col-md-4 " >
                            <label class=" {{ $errors->has('nombre') ? 'error text-danger' : '' }}"  >Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control -sm"
                                placeholder="Nombre producto" value="{{ old('nombre') }}" autofocus >
                                @if ($errors->has('nombre'))
                                    <span class="error text-danger ">* {{ $errors->first( 'nombre') }}</span>
                                @endif
                        </div>

                        <div class="col-md-2">
                            <label>Precio</label>
                            <input type="number" name="precio" id="precio" class="form-control error "
                                placeholder="00.00" >
                        </div>

                        <div class="col-md-3">
                            <label class="{{ $errors->has('catProducto_id') ? 'error text-danger' : '' }}" >Categoria</label>
                            <select id="catProducto_id" name="catProducto_id" class="form-control">
                                <option selected="">Seleccionar...</option>
                                @foreach ($vcatproducto as $cp)
                                    <option value="{{ $cp->id }}">{{ $cp->nombre }} </option>
                                @endforeach
                            </select>
                            @if ($errors->has('catProducto_id'))
                            <span class="error text-danger ">* {{ $errors->first( 'catProducto_id') }}</span>
                            @endif
                        </div>

                        <div class="col-md-3">
                            <label>Clasificacion</label>
                            <select id="clasProducto_id" name="clasProducto_id" class="form-control">
                                <option selected="">Seleccionar...</option>
                                @foreach ($vclasproducto as $cp)
                                    <option value="{{ $cp->id }}">{{ $cp->nombre }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <label for="">Descripcion</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="descripcion" id="descripcion"
                            placeholder="Agregar algun detalle">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
