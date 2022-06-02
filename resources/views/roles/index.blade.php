@extends('layouts.admin2template')
@section('contenido')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4><i class="mdi mdi-account"></i> LISTA DE ROLES</h4>
            {{--  <span class="ml-1">Datatable</span>  --}}
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/users/create') }}">Usuario</a></li>
            <li class="breadcrumb-item active"><a class="text-muted">Lista de roles</a></li>
        </ol>
    </div>
</div>


{{--  TABLA  --}}
<div class="container-fluid">

    <div id="accordion-nine" class="accordion accordion-active-header">
        <div class="accordion__item">
            <div class="accordion__header collapsed" data-toggle="collapse" data-target="#active-header_collapseTwo">
                <span class="accordion__header--icon"></span>
                <span class="accordion__header--text">BUSQUEDA PERSONALIZADA</span>
                <span class="accordion__header--indicator"></span>
            </div>
            <div id="active-header_collapseTwo" class="collapse accordion__body" data-parent="#accordion-nine">
                <div class="accordion__body--text">

                    <form action="{{ route( 'producto.reporteFecha') }}" method="get">

                        <div class="row">
                            <div class="col-md-2">
                                <input type="date" name="fechaInicio" id="fechaInicio" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="fechaFin" id="fechaFin" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <div class="input-group-append">
                                    <input type="submit" value="Filtrar" class="btn btn-outline-success">
                                </div>
                            </div>
                            {{-- {!! Form::open(['route' => 'producto.index', 'method' => 'GET']) !!} --}}
                            <div class="col-md-2">
                                <select id="tipo" name="tipo" class="form-control" >
                                    <option selected="">Seleccionar...</option>
                                    <option value="nombre">Nombre</option>
                                    <option value="precio">Precio</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="search" class="form-control" name="nombre" id="nombre" placeholder="..."

                                required >
                            </div>
                            <div class="col-md-1">
                                <div class="input-group-append">
                                    <input type="submit" value="Buscar" class="btn btn-outline-primary ">
                                </div>
                            </div>
                            {{-- {!! Form::close() !!} --}}
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    {{--  @if (session('success'))
    <div class="alert alert-outline-success alert-dismissible fade show"> <i class="mdi mdi-check"></i>
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button> {{ session('success') }}
    </div>
    @endif

    @if (session('secondary'))
    <div class="alert alert-outline-secondary alert-dismissible fade show"> <i class="mdi mdi-alert"> </i>{{ Auth::user()->personita->nombre }},
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button> {{ session('secondary') }}
    </div>
    @endif  --}}

    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <button type="submit" class="form-control btn btn-success"><a href="{{ route('roles.create') }}"><i class="fa fa-plus"></i> CREA UNO</a> </button>
                        {{--  <h4>Bootstrap Data Table </h4>  --}}
                    </div>
                    <div class="bootstrap-data-table-panel">
                        <div class="table-responsive">
                            <table id="simple" class="table table-bordered table-striped">
                            {{--  <table id="row-select" class="display table table-borderd table-hover">  --}}
                                <thead>
                                    <tr class="text-danger" style="background: rgb(255, 74, 24)"  >
                                        <th class="text-white">id</th>
                                        <th class="text-white">Rol</th>
                                        <th class="text-white">Guard</th>
                                        <th class="text-white">Permisos</th>
                                        <th class="text-white">Fecha de creacion</th>
                                        <th class="text-white">acceso</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($vrole as $rol)
                                    <tr class="text-dark">

                                        <td>{{$rol->id  }}</td>
                                        <td>{{$rol->name  }}</td>
                                        <td>{{$rol->guard_name  }}</td>
                                        <td>
                                            @forelse ($rol->permissions as $permission)
                                                <span class="badge badge-info" style="margin-bottom: 5px">{{ $permission->name }}</span>
                                            @empty
                                            <span class="badge  badge-rounded badge-outline-danger" >Sin permisos</span>
                                            @endforelse
                                        </td>
                                        <td>{{$rol->created_at->toFormattedDateString()}} </td>
                                        <td>
                                            <a href="{{ route('roles.show', $rol->id) }}" class="btn btn-outline-success btn-rounded" title="VER" > <i class="mdi mdi-book-open" ></i></a>
                                            <a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-outline-secondary btn-rounded" title="EDITAR" > <i class="mdi mdi-table-edit" ></i></a>
                                            <a href="{{ route('roles.destroy', $rol->id) }}" class="btn btn-outline-danger btn-rounded" title="ELIMINAR" > <i class="mdi mdi-delete-forever" ></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
    </section>
</div>
{{--  TABLA  --}}
@endsection
