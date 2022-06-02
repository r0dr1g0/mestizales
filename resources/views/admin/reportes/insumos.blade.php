@extends('layouts.admintemplate')
@section('contenido')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                {{--  <i class="mdi mdi-menu"></i>  --}}
                <h4> <i class="mdi mdi-menu"></i> REPORTE DE INSUMOS</h4>
                {{-- <span class="ml-1">Datatable</span> --}}
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('insumo.index') }}">Insumos</a></li>
                <li class="breadcrumb-item active"><a>Lista de Insumos</a></li>
            </ol>
        </div>
    </div>
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

                        {!! Form::open(['route' => 'producto.index', 'method' => 'GET']) !!}

                        <div class="input-group mb-3">
                            <input type="date" name="" id="" class="form-control">
                            <input type="date" name="" id="" class="form-control">
                            <div class="input-group-append">
                                <input type="submit" value="Filtrar" class="btn btn-outline-success"> __
                            </div>
                            <select id="tipo" name="tipo" class="form-control">
                                <option selected="">Seleccionar...</option>
                                <option value="nombre">Nombre</option>
                                <option value="precio">Precio</option>
                            </select>
                            <input type="search" class="form-control" name="nombre" id="nombre" placeholder="...">
                            <div class="input-group-append">
                                <input type="submit" value="Buscar" class="btn btn-outline-primary ">
                                {{-- <button class="btn btn-primary" type="submit">Buscar</button> --}}
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}

        {{-- TABLA --}}

        <section id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                        </div>
                        <div class="bootstrap-data-table-panel">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    {{-- <table id="row-select" class="display table table-borderd table-hover"> --}}
                                    <thead>
                                        <tr role="row">
                                            <th>id</th>
                                            <th>Categoria</th>
                                            <th>Nombre</th>
                                            <th>Marca / Empresa</th>
                                            <th>Medida</th>
                                            <th>Precio</th>
                                            <th>Descripcion</th>
                                            <th>Fecha de creacion</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($vinsumo as $i)
                                            <tr class="text-dark">
                                                <td>{{ $i->id }}</td>
                                                <td>{{ $i->categoriainsumo->nombre }}</td>
                                                <td>{{ $i->nombre }}</td>
                                                <td>{{ $i->proveedor->nombre }}</td>
                                                <td>{{ $i->tipomedida->nombre }}</td>
                                                <td>{{ $i->precio }} Bs</.td>
                                                <td>{{ $i->descripcion }}</td>
                                                <td>{{ $i->created_at }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Categoria</th>
                                            <th>Nombre</th>
                                            <th>Marca / Empresa</th>
                                            <th>Medida</th>
                                            <th>Precio</th>
                                            <th>Descripcion</th>
                                            <th>Fecha de creacion</th>

                                        </tr>
                                    </tfoot>
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


    @push('styles')
    {{-- EXPORT DATATABLE --}}
    <link rel="stylesheet" href="{{asset ('plantillaadmin/focus/exportdatatable/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{asset ('plantillaadmin/focus/exportdatatable/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{asset ('plantillaadmin/focus/exportdatatable/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
        {{-- EXPORT DATATABLE --}}
 @endpush

    @push('scripts')
    {{-- EXPORT DATATABLE --}}
    <script src="{{asset ('plantillaadmin/focus/exportdatatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset ('plantillaadmin/focus/exportdatatable/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset ('plantillaadmin/focus/exportdatatable/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset ('plantillaadmin/focus/exportdatatable/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset ('plantillaadmin/focus/exportdatatable/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset ('plantillaadmin/focus/exportdatatable/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset ('plantillaadmin/focus/exportdatatable/jszip/jszip.min.js')}}"></script>
    <script src="{{asset ('plantillaadmin/focus/exportdatatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset ('plantillaadmin/focus/exportdatatable/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset ('plantillaadmin/focus/exportdatatable/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset ('plantillaadmin/focus/exportdatatable/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset ('plantillaadmin/focus/exportdatatable/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>
      {{-- EXPORT DATATABLE --}}
    @endpush

@endsection
