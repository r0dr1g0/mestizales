@extends('layouts.admintemplate')

@section('contenido')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>REGISTRO DE PERMISOS</h4>
                {{-- <span class="ml-1">Datatable</span> --}}
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('permissions.index') }}">Privilegios</a></li>
                <li class="breadcrumb-item"><a href="{{ route('permissions.create') }}">Creando permisos</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

<div class="container">
    <div class="card">
        <div class="card-header">
            <center> <h4 class="card-title">NUEVO</h4></center>
        </div>
        <div class="card-body">
            <div class="basic-form">
                {!! Form::open(['route'=>'permissions.store','method'=>'POST']) !!}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Ej. Editar, Elimar... etc." autofocus
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
