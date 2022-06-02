{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}

@extends('layouts.admintemplate')
{{--  @extends('layouts.template')  --}}
@section('contenido')

<div class="container-fluid row">
    <div class="col-lg-3 col-sm-6">
        <div class="card" style="border-radius: 20px">
            <div class="stat-widget-one card-body">
                <div class="stat-icon d-inline-block">
                    <i class="ti-user text-primary border-warning"></i>
                </div>
                @php
                use App\Models\persona;
                $cant_personas = Persona::count();
                @endphp
                <div class="stat-content d-inline-block">
                    <div class="stat-text">Personas</div>
                    <div class="stat-digit">{{  $cant_personas }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card" style="border-radius: 20px">
            <div class="stat-widget-one card-body">
                <div class="stat-icon d-inline-block">
                    <i class="ti-user text-primary border-primary"></i>
                </div>
                @php
                use App\Models\User;
                $cant_usuario = User::count();
                @endphp
                <div class="stat-content d-inline-block">
                    <div class="stat-text">Usuarios</div>
                    <div class="stat-digit">{{  $cant_usuario }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card" style="border-radius: 20px">
            <div class="stat-widget-one card-body">
                <div class="stat-icon d-inline-block">
                    <i class="ti-layout-grid2 text-pink border-pink"></i>
                </div>
                @php
                use App\Models\producto;
                $cant_producto = producto::count();
                @endphp
                <div class="stat-content d-inline-block">
                    <div class="stat-text">Productos</div>
                    <div class="stat-digit">{{  $cant_producto }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card" style="border-radius: 20px">
            <div class="stat-widget-one card-body">
                <div class="stat-icon d-inline-block">
                    <i class="ti-agenda text-danger border-danger"></i>
                </div>
                @php
                use App\Models\insumo;
                $cant_insumo = insumo::count();
                @endphp
                <div class="stat-content d-inline-block">
                    <div class="stat-text">Insumos</div>
                    <div class="stat-digit">{{  $cant_insumo }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

