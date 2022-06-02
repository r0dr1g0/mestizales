@extends('layouts.admintemplate')
@section('contenido')

<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>REGISTRO DE CLIENTES</h4>
            {{--  <span class="ml-1">Datatable</span>  --}}
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('cliente.index') }}">Clientes </a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Registrando cliente</a></li>
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
                {!! Form::open(['route'=>'cliente.store','method'=>'POST']) !!}
                    <div class="input-group mb-3">

                        {{--  <div class="col-md-3">  --}}
                            {{--  <label>Genero</label>  --}}
                            <select  id="persona_id"  name="persona_id" class="form-control">
                                <option selected="">- Seleccionar persona -</option>
                                @foreach ($vpersona as $p)
                                    <option value="{{ $p->id }}" >{{ $p->nombre }} {{ $p->apellido }} </option>
                                @endforeach
                            </select> -
                        {{--  </div>  --}}
                        <input type="number" class="form-control" name="nit" id="nit" placeholder="NIT"> -
                        <input type="text" class="form-control" name="razonSocial" id="razonSocial" placeholder="Razon social">
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
