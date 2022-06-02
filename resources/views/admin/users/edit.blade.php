@extends('layouts.admintemplate')
@section('contenido')

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>EDICION DE PRODUCTO</h4>
                {{-- <span class="ml-1">Datatable</span> --}}
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuarios</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Modificando usuarios</a></li>
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
                    {!! Form::open(['route' => ['users.update', $vusers->id], 'method' => 'PUT']) !!}
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="row">

                        <div class="col-md-4">
                            <label>Correo Electronico</label>
                            <input type="text" name="email" id="email" class="form-control input-default"
                                value="{{ $vusers->email }}" autofocus>
                        </div>

                        <div class="col-md-4">
                            <label>Seleccione la persona</label>
                            <select id="persona_id" name="persona_id" class="form-control">
                                <option selected="" value="{{ $vusers->id }}">{{ $vusers->personita->nombre }}
                                    {{ $vusers->personita->apellido }}</option>
                                @foreach ($vpersona as $p)
                                    <option value="{{ $p->id }}">{{ $p->nombre }} {{ $p->apellido }} </option>
                                @endforeach
                            </select>
                            <br>
                        </div>

                        <div class="col-md-4">
                            <label>Nombre de usuario</label>
                            <input type="text" name="username" id="username" class="form-control input-default"
                                value="{{ $vusers->username }}">
                        </div>

                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="password" id="password"
                                    placeholder="¿Quieres cambiar la contraseña?, ingresa una nueva !">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <table>
                                <tbody>
                                    @foreach ($vrole as $id => $rol)
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="roles[]"
                                                        value="{{ $id }}"
                                                        {{ $vusers->roles->contains($id) ? 'checked' : '' }}>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="form-check-label" for="check1">{{ $rol }}</label>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    @endsection
