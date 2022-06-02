@extends('layouts.admintemplate')
@section('contenido')

<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>REGISTRO DE PROVEEDORES O EMPRESAS</h4>
            {{--  <span class="ml-1">Datatable</span>  --}}
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('proveedor.index') }}">Proveedores </a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Registro de proveedor</a></li>
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
                {!! Form::open(['route'=>'proveedor.store','method'=>'POST']) !!}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ej. Guabira, Coca Cola, Fancesa... etc."> -
                        <input type="number" class="form-control" name="celular" id="celular" placeholder="Numero de contacto"> -
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Mail">
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
