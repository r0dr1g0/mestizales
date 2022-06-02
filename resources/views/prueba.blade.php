
@extends('layouts.admin2template')
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


        {{-- LOGIN DE MESTIZALES ANTOGUO --}}
@extends('layouts.logintemplate')
@section('contenido')
    <form method="POST" action="{{ route('login') }}" class="login90-form validate-form">
        @csrf
        <h4>
            <center>INICIAR SESIÓN</center>
        </h4>

        <span class="login100-form-title p-b-48">
            <img src="{{ asset('plantillalogin/superminilogo.png') }}" alt="{{ __('') }}" sizes="10%">
        </span>

        <!-- CAMPO USUARIO -->
        <div class=" wrap-input100 validate-input">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="email" type="email" name="email" value="{{ old('email') }}"
            required autocomplete="email" autofocus
                class="input100 @error('email') is-invalid @enderror">
            <span class="focus-input100" data-placeholder="{{ __('Correo electronico') }}"></span>
        </div>

        <!-- CAMPO CONTRASENA -->
        <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
                <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" id="password"
                required autocomplete="current-password">
            <span class="focus-input100" data-placeholder="{{ __('Contraseña') }}"></span>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- RECUERDAME -->
        <div class="col-md-2 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Recuerdame') }}
                </label>
            </div>
        </div>


        <!-- BOTON -->
        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn">
                    Ingresar
                </button>
            </div>
        </div>

        <div class="text-center p-t-20">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Olvidó su contraseña ?') }}
                </a>
            @endif
            </a>
        </div>
    </form>
@endsection

