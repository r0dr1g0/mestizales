@extends('layouts.admintemplate')
@section('contenido')

<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>EDICION DE PRODUCTO</h4>
            {{--  <span class="ml-1">Datatable</span>  --}}
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('producto.index') }}">Producto</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Modificando producto</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">
            <center> <h4 class="card-title">NUEVO</h4></center>
        </div>
        <div class="card-body">
            <div class="basic-form">
                {!! Form::open(['route'=>['producto.update', $vproducto->id],'method'=>'PUT']) !!}
                <div class="row">

                    <div class="col-md-3">
                        <label {{ $errors->has('nombre') ? 'error text-danger' : '' }}>Nombre</label>
                        {{--  <input type="text" name="nombre" id="nombre" class="form-control input-default" value="{{ $vproducto->nombre }}" >  --}}
                        <input type="text" name="nombre" id="nombre" class="form-control input-default" value="{{ old('nombre',  $vproducto->nombre) }}" >
                            @if ($errors->has('nombre'))
                                    <span class="error text-danger ">* {{ $errors->first( 'nombre') }}</span>
                            @endif
                    </div>

                    <div class="col-md-3">
                        <label>Categoria</label>
                        <select  id="catProducto_id"  name="catProducto_id" class="form-control">
                            <option selected="" value="{{$vproducto->catProducto_id }}">{{ $vproducto->categoriaproducto->nombre }}</option>
                            @foreach ($vcatproducto as $cp)
                                <option value="{{ $cp->id }}" >{{ $cp->nombre }} </option>
                            @endforeach
                        </select>
                        <br>
                    </div>

                    <div class="col-md-3">
                        <label>Clasificacion</label>
                        <select  id="clasProducto_id"  name="clasProducto_id" class="form-control">
                            <option selected="" value="{{$vproducto->clasProducto_id }}">{{ $vproducto->clasificacionproducto->nombre }}</option>
                            @foreach ($vclasproducto as $clp)
                                <option value="{{ $clp->id }}" >{{ $clp->nombre }} </option>
                            @endforeach
                        </select>
                        <br>
                    </div>

                    <div class="col-md-3">
                        <label>Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control input-default " value="{{ $vproducto->precio }}" >
                    </div>

                    <div class="col-md-12">
                        <label for="">Descripcion</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="descripcion" id="descripcion"  value="{{ $vproducto->descripcion }}" >
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
