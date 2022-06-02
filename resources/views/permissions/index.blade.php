@extends('layouts.admin2template')
@section('contenido')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4><i class="mdi mdi-account"></i> LISTA DE PRIVILEGIOS</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('persona.create') }}">Usuario</a></li>
            <li class="breadcrumb-item active"><a class="text-muted">Lista de permisos</a></li>
        </ol>
    </div>
</div>
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
{{--  TABLA  --}}
    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <button type="submit" class="form-control btn btn-success"><a href="{{ route('permissions.create') }}"><i class="fa fa-plus"></i> CREA UNO</a> </button>
                        {{--  <h4>Bootstrap Data Table </h4>  --}}
                    </div>
                    <div class="bootstrap-data-table-panel">
                        <div class="table-responsive">
                            <table id="simple" class="table table-bordered table-striped">
                            {{--  <table id="row-select" class="display table table-borderd table-hover">  --}}
                                <thead>
                                    <tr role="row">
                                        <th>id</th>
                                        <th>Permisos</th>
                                        <th>Guard</th>
                                        <th>Fecha de creacion</th>
                                        <th class="td-actions  text-right">acceso</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($vpermission as $p)
                                    <tr class="text-dark">

                                        <td>{{$p->id  }}</td>
                                        <td>{{$p->name  }}</td>
                                        <td>{{$p->guard_name  }}</td>
                                        <td>{{$p->created_at  }}</td>
                                        <td class="td-actions  text-right" >
                                            <a href="{{ route('permissions.show', $p->id) }}" class="btn btn-outline-success btn-rounded" title="VER" > <i class="mdi mdi-book-open" ></i></a>
                                            <a href="{{ route('permissions.edit', $p->id) }}" class="btn btn-outline-secondary btn-rounded" title="EDITAR" > <i class="mdi mdi-table-edit" ></i></a>
                                            <a href="{{ route('permissions.destroy', $p->id) }}" class="btn btn-outline-danger btn-rounded" title="ELIMINAR" > <i class="mdi mdi-delete-forever" ></i></a>
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
