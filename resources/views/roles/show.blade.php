@extends('layouts.admintemplate')
@section('contenido')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $vrole->name }}"
                            disabled>
                    </div>
                    <div class="input-group mb-3">
                        @forelse($vrole->permissions  as  $permission)
                            <span class="badge badge-info"
                                style="margin-bottom: 5px; margin-right: 5px;">{{ $permission->name }}</span>
                        @empty
                            <span class="badge  badge-rounded badge-outline-danger">Sin permisos</span>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
