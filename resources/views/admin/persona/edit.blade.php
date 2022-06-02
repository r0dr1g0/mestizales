@extends('layouts.admintemplate')
@section('contenido')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>REGISTRO DE PERSONAS</h4>
            {{--  <span class="ml-1">Datatable</span>  --}}
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('persona.index') }}">Lista de Personas</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Registro Persona</a></li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="card-header">
            <center> <h4 class="card-title">EDITANDO PERSONA con genero ...</h4></center>
        </div>
        <div class="card-body">
            <div class="basic-form">
                {!! Form::open(['route'=>['persona.update', $vpersona->id],'method'=>'PUT']) !!}
                <div class="row">
                    <div class="col-md-3">
                        <label>Genero</label>
                        <select  id="genero_id"  name="genero_id" class="form-control">
                            <option selected="" value="{{$vpersona->id }}">{{ $vpersona->generos->nombre }}</option>
                            @foreach ($vgenero as $vg)
                                <option value="{{ $vg->id }}" >{{ $vg->nombre }} </option>
                            @endforeach
                        </select>
                        <br>
                    </div>

                    <div class="col-md-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control input-default" value="{{ $vpersona->nombre }}" >
                    </div>

                    <div class="col-md-3">
                        <label>Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control input-default " placeholder="Apellidos" value="{{ $vpersona->apellido }}" >
                    </div>

                    <div class="col-md-3">
                        <label>Carnet</label>
                        <input type="number" name="ci" id="ci" class="form-control input-default " placeholder="Cedula de identidad" value="{{ $vpersona->ci }}" >
                    </div>

                    {{--  <div class="col-md-3">
                        <label>NIT</label>
                        <input type="text" name="nit" id="nit" class="form-control input-default " placeholder="Nro de Id. Tributaria" value="{{ $vpersona->nit }}" >
                    </div>

                    <div class="col-md-3">
                        <label>Razon Social</label>
                        <input type="text" name="razon_social" id="razon_social" class="form-control input-default " placeholder="Razon Social" value="{{ $vpersona->razon_social }}" >
                    </div>  --}}

                    <div class="col-md-3">
                        <label>Celular</label>
                        <input type="text" name="celular" id="celular" class="form-control input-default " placeholder="Nro de Celular" value="{{ $vpersona->celular }}" >
                    </div>

                    <div class="col-md-3">
                        <label>Correo</label>
                        <input type="text" name="correo" id="correo" class="form-control input-default " placeholder="Direccion de correo" value="{{ $vpersona->correo }}" >
                    </div>
                    <br>
                </div>
                <br>

                <label for="">Direccion</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion de domicilio actual" value="{{ $vpersona->direccion }}" >
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
