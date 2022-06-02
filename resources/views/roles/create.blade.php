@extends('layouts.admintemplate')

@section('contenido')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>REGISTRO DE ROLES</h4>
                {{-- <span class="ml-1">Datatable</span> --}}
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Rol</a></li>
                <li class="breadcrumb-item"><a href="{{ route('roles.create') }}">Creando rol</a></li>
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
                {!! Form::open(['route'=>'roles.store','method'=>'POST']) !!}
                @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Ej. Administrador, Cajero, Supervisor, etc." autofocus>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">PERMISOS</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="bootstrap-data-table-panel">
                                                <div class="table-responsive">
                                            <table id="simple" class="table  table-striped">
                                                <tbody>
                                                    @foreach ($vpermission as $id  => $permission)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="permissions[]" value="{{ $id }}">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="form-check-label" for="check1">{{ $permission }}</label>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                            {{--  <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" value="" checked>
                                                <label class="form-check-label" for="check1">Option 1</label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input type="checkbox" class="form-check-input"  value="" disabled>
                                                <label class="form-check-label" for="check3">Disabled</label>
                                            </div>  --}}
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
