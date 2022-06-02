@extends('layouts.admintemplate')
@section('contenido')

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4> <i class="mdi mdi-menu"></i> <a href="{{ route('cliente.index') }}"
                        class=" text text-primary">CLIENTES</a> </h4>
                {{-- <span class="ml-1">Datatable</span> --}}
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Reporte de usuarios</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Clientes</a></li>
            </ol>
        </div>
    </div>
    {{-- TABLA --}}
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

        {{-- @include('admin.cliente.show') --}}

        <div class="modal fade" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <section id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <button type="submit" class="form-control btn btn-success"><a
                                    href="{{ route('cliente.create') }}"> <i class="fa fa-plus"></i> CREA UNO</a>
                            </button>
                        </div>
                        <div class="bootstrap-data-table-panel">
                            <div class="table-responsive">
                                {{-- <table id="simple" class="display" style="width:100%"> --}}
                                <table id="simple" class="table  table-striped">
                                    <thead>
                                        <tr role="row">
                                            <th>id</th>
                                            <th>Nombre</th>
                                            <th>Celular</th>
                                            <th>NIT</th>
                                            <th>Razon Social</th>
                                            <th class="td-actions  text-right">Acceso</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($vcliente as $c)
                                            <tr class="text-dark">
                                                <td class="sorting_1">{{ $c->id }}</td>
                                                <td>{{ $c->personita->nombre }} {{ $c->personita->apellido }}</td>
                                                <td>{{ $c->personita->celular }}</td>
                                                <td>{{ $c->nit }}</td>
                                                <td>{{ $c->razonSocial }}</td>
                                                <td class="td-actions  text-right">
                                                    <a href="#" class="btn btn-outline-success btn-rounded" title="VER"
                                                        data-toggle="modal" data-target="#exampleModalCenter"> <i
                                                            class="mdi mdi-book-open"></i></a>
                                                    <a href="{{ route('cliente.show', $c->id) }}"
                                                        class="btn btn-outline-success btn-rounded" title="VER"> <i
                                                            class="mdi mdi-book-open"></i></a>
                                                    <a href="{{ route('cliente.edit', $c->id) }}"
                                                        class="btn btn-outline-secondary btn-rounded" title="EDITAR"> <i
                                                            class="mdi mdi-table-edit"></i></a>
                                                    <a href="{{ route('cliente.destroy', $c->id) }}"
                                                        class="btn btn-outline-danger btn-rounded" title="ELIMINAR"> <i
                                                            class="mdi mdi-delete-forever"></i></a>
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
