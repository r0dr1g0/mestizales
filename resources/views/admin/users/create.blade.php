@extends('layouts.admintemplate')

@section('contenido')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>REGISTRO DE USUARIOS</h4>
                {{-- <span class="ml-1">Datatable</span> --}}
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('persona.create') }}">Crear Persona</a></li>
                <li class="breadcrumb-item"><a href="{{ route('persona.index') }}">Usuarios</a></li>
                <li class="breadcrumb-item active"><a>Registro Usuario</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label>{{ __('Email') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" placeholder="Ingrese su correo electronico !"
                                        autofocus>
                                    @if ($errors->has('email'))
                                        <span class="error text-danger"
                                            for="input-email">{{ $errors->first('email') }}</span>
                                    @endif
                                    {{-- <span class="error text-danger">Dato incorrecto</span> --}}

                                </div>

                                <div class="col-md-4">
                                    <label>{{ __('Nombre persona') }} </label>
                                    {{-- <span class="text-danger">*</span> --}}
                                    <select id="persona_id" name="persona_id" class="form-control">
                                        <option selected="">Seleccionar...</option>
                                        @foreach ($vpersona as $vp)
                                            <option value="{{ $vp->id }}">{{ $vp->nombre }}
                                                {{ $vp->apellido }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label> Usuario
                                        {{-- <span class="text-danger">*</span> --}}
                                    </label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="{{ old('username') }}" placeholder="Ingrese Nombre de ">

                                    @if ($errors->has('username'))
                                        <span class="error text-danger"
                                            for="input-username">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-12">
                                    <label class="col-form-label" for="password">{{ __('Contraseña') }}
                                        {{-- <span class="text-danger">*</span> --}}
                                    </label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="*** ...">
                                        @if ($errors->has('password'))
                                            <span class="error text-danger"
                                                for="input-password">{{ $errors->first('password') }}</span>
                                        @endif
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="col-form-label">{{ __('Asignar un rol') }}
                                        <table id="simple" class="table  table-striped">
                                            <tbody>
                                                @foreach ($vrole as $id => $role)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input type="checkbox" class="form-check-input" id="check1"
                                                                    name="roles[]" value="{{ $id }}">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="form-check-label"
                                                                for="check1">{{ $role }}</label>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
