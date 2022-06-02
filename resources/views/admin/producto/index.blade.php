@extends('layouts.admin2template')
@section('contenido')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4> <i class="mdi mdi-menu"></i> <a href="{{ route('producto.index') }}"
                        class=" text text-primary">PRODUCTOS</a> </h4>
                {{-- <span class="ml-1">Datatable</span> --}}
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/reportes/productos') }}">Inventario de productos</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{ route('producto.index') }}">Productos</a></li>
            </ol>
        </div>
    </div>
    {{-- TABLA --}}

    <div class="container-fluid">
        {{-- <div class="col-md-12"> --}}
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
                                {{--  <div class="col-md-2">
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
                                </div>  --}}
                                {{-- {!! Form::close() !!} --}}
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}

        <section id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <button type="submit" class="form-control btn btn-success">
                                <a href="{{ route('producto.create') }}"> <i class="fa fa-plus"></i> CREA UNO </a> |
                                {{-- <a href="{{ route('producto.create') }}" class="badge badge-outline-primary"> <i class="fa fa-plus"></i> CREA UNO </a> --}}
                                <a href="{{ url('admin/producto/export') }}"> <i class="fa fa-download"></i> DESCARGAR</a>
                            </button>
                            {{-- <h4>Bootstrap Data Table </h4> --}}
                        </div>

                        <div class="bootstrap-data-table-panel" >
                            <div class="table-responsive">
                                <table id="simple" class="table table-bordered table-striped">
                                {{--  <table id="simple" class="display" style="width:100%">  --}}
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Clasificacion</th>
                                            <th>Precio</th>
                                            <th>Descripcion</th>
                                            <th>Fecha de creacion</th>
                                            <th>Acceso</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($vproducto as $p)
                                            <tr role="row " class="odd">
                                                <td class="text-dark">{{ $p->id }}</td>
                                                <td class="text-dark">{{ $p->nombre }}</td>
                                                <td class="text-dark">{{ $p->categoriaproducto->nombre }}</td>
                                                <td class="text-dark">{{ $p->clasificacionproducto->nombre }}</td>
                                                <td class="text-dark">{{ $p->precio }}.00 Bs</td>
                                                <td class="text-dark">{{ $p->descripcion }}</td>
                                                <td class="text-dark">{{ $p->created_at }}</td>
                                                <td style="display: inline-block;">
                                                    <a href="#" class="btn btn-outline-success btn-rounded" title="VER"> <i
                                                            class="mdi mdi-book-open"></i></a>
                                                    <a href="{{ route('producto.edit', $p->id) }}"
                                                        class="btn btn-outline-secondary btn-rounded" title="EDITAR"> <i
                                                            class="mdi mdi-table-edit"></i></a>
                                                    <a href="{{ route('producto.destroy', $p->id) }}"
                                                        class="btn btn-outline-danger btn-rounded" title="ELIMINAR">
                                                        <i class="mdi mdi-delete-forever"></i></a>
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
