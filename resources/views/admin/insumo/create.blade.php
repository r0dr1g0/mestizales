@extends('layouts.admintemplate')
@section('contenido')

<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>REGISTRO DE INSUMOS</h4>
            {{--  <span class="ml-1">Datatable</span>  --}}
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('insumo.index') }}">Insumos</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Registro Insumos</a></li>
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
                {!! Form::open(['route'=>'insumo.store','method'=>'POST']) !!}
                <div class="row">

                    <div class="col-md-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control input-default " placeholder="Nombre insumo">
                    </div>
                    <div class="col-md-3">
                        <label>Categoria Insumo</label>
                        <select  id="catInsumo_id"  name="catInsumo_id" class="form-control">
                            <option selected="">Seleccionar...</option>
                            @foreach ($vcategoriainsumo as $ci)
                                <option value="{{ $ci->id }}" >{{ $ci->nombre }} </option>
                            @endforeach
                        </select>
                        <br>
                    </div>
                    <div class="col-md-3">
                        <label>Proveedor / Marca</label>
                        <select  id="proveedor_id"  name="proveedor_id" class="form-control">
                            <option selected="">Seleccionar...</option>
                            @foreach ($vproveedor as $p)
                                <option value="{{ $p->id }}" >{{ $p->nombre }} </option>
                            @endforeach
                        </select>
                        <br>
                    </div>
                    <div class="col-md-2">
                        <label>Medida en</label>
                        <select  id="tipoMedida_id"  name="tipoMedida_id" class="form-control">
                            <option selected="">Seleccionar...</option>
                            @foreach ($vtipomedida as $tm)
                                <option value="{{ $tm->id }}" >{{ $tm->nombre }} </option>
                            @endforeach
                        </select>
                        <br>
                    </div>
                    <div class="col-md-1">
                        <label>Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control input-default " placeholder="0.00">
                    </div>
                    <br>
                </div>
                <label for="">Descripcion</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Agregar algun detalle">
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
