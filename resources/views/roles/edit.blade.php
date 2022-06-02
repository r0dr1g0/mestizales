@extends('layouts.admintemplate')
@section('contenido')

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>EDICION DE ROL</h4>
                {{-- <span class="ml-1">Datatable</span> --}}
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Editando permisos ...</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <center>
                    <h4 class="card-title">NUEVO</h4>
                </center>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    {{-- {!! Form::open(['route'=>['roles.update', $vrole->id],'method'=>'PUT']) !!} --}}
                    <form action="{{ route('roles.update', $vrole->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name"  value="{{ old('name', $vrole->name) }}"  autofocus>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                            </div>
                        </div>
                        <table>
                            <tbody>
                                @foreach ($vpermission as $id => $permission)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="permissions[]"
                                                value="{{ $id }}" {{ $vrole->permissions->contains($id) ? 'checked' : '' }}>
                                            </div>
                                        </td>
                                        <td>
                                            <label class="form-check-label" for="check1">{{ $permission }}</label>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                    {{--  {!! Form::close() !!}  --}}
                </div>
            </div>
        </div>
    </div>

@endsection
