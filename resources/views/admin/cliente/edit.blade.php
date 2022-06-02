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
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Editando cliente</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">
            <center> <h4 class="card-title">EDITANDO CLIENTE con persona ...</h4></center>
        </div>
        <div class="card-body">
            <div class="basic-form">
                {!! Form::open(['route'=>['cliente.update', $vcliente->id],'method'=>'PUT']) !!}
                    <div class="input-group mb-3">

                        {{--  <div class="col-md-3">  --}}
                            {{--  <label>Genero</label>  --}}
                            <select  id="persona_id"  name="persona_id" class="form-control">
                                <option selected="" value="{{ $vcliente->id }}" >{{ $vcliente->personita->nombre }}</option>
                                @foreach ($vpersona as $p)
                                    <option value="{{ $p->id }}" >{{ $p->nombre }} {{ $p->apellido }} </option>
                                @endforeach
                            </select> -
                        {{--  </div>  --}}
                        <input type="number" class="form-control" name="nit" id="nit" value="{{ $vcliente->nit }}" > -
                        <input type="text" class="form-control" name="razonSocial" id="razonSocial" value="{{ $vcliente->razonSocial }}">
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
