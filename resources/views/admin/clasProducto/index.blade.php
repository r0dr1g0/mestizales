@extends('layouts.admintemplate')
@section('contenido')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4><i class="mdi mdi-menu"></i> CLASIFICACION DE PRODUCTOS</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Productos</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Clasificación Producto</a></li>
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

                        <form action="{{ route('producto.reporteFecha') }}" method="get">

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
                                    <select id="tipo" name="tipo" class="form-control">
                                        <option selected="">Seleccionar...</option>
                                        <option value="nombre">Nombre</option>
                                        <option value="precio">Precio</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="search" class="form-control" name="nombre" id="nombre" placeholder="..."
                                        required>
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
        {{-- TABLA --}}
        <section id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <button type="submit" class="form-control btn btn-success"><a
                                    href="{{ route('clasProducto.create') }}">CREA UNO</a> </button>
                        </div>
                        <div class="bootstrap-data-table-panel">
                            <div class="table-responsive">
                                <table id="simple" class="table table-bordered table-striped">
                                    {{-- <table id="row-select" class="display table table-borderd table-hover"> --}}
                                    <thead>
                                        <tr role="row">
                                            <th>id</th>
                                            <th>Nombre</th>
                                            <th>Fecha de creacion</th>
                                            <th>Acceso</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($vclasproducto as $cp)
                                            <tr class="text-dark">
                                                <td class="sorting_1">{{ $cp->id }}</td>
                                                <td>{{ $cp->nombre }}</td>
                                                <td>{{ $cp->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('clasProducto.show', $cp->id) }}"
                                                        class="btn btn-outline-success btn-rounded" title="VER"> <i
                                                            class="mdi mdi-book-open"></i></a>
                                                    <a href="{{ route('clasProducto.edit', $cp->id) }}"
                                                        class="btn btn-outline-secondary btn-rounded" title="EDITAR"> <i
                                                            class="mdi mdi-table-edit"></i></a>
                                                    <a href="{{ route('clasProducto.destroy', $cp->id) }}"
                                                        class="btn btn-outline-danger btn-rounded" title="ELIMINAR"> <i
                                                            class="mdi mdi-delete-forever"
                                                            onsubmit="return confirm('Esta seguro que quiere eliminar?')"></i></a>
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
    {{-- TABLA --}}
@endsection
