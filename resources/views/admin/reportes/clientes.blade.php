@extends('layouts.admintemplate')
@section('contenido')

<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4> <i class="mdi mdi-menu"></i> <a href="{{ route('cliente.index') }}" class=" text text-primary" >CLIENTES</a> </h4>
            {{--  <span class="ml-1">Datatable</span>  --}}
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Reporte de usuarios</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Clientes</a></li>
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
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
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
                    </div>
                    <div class="bootstrap-data-table-panel">
                        <div class="table-responsive">
                            {{--  <table id="simple" class="display" style="width:100%">  --}}
                            <table id="example1" class="table table-bordered table-striped">
                            {{--  <table id="row-select" class="display table table-borderd table-hover">  --}}
                                <thead>
                                    <tr role="row">
                                        <th>id</th>
                                        <th>Nombre</th>
                                        <th>Genero</th>
                                        <th>Celular</th>
                                        <th>Correo</th>
                                        <th>NIT</th>
                                        <th>Razon Social</th>
                                        <th>Direccion</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($vcliente as $c)
                                    <tr class="text-dark">
                                        <td>{{$c->id}}</td>
                                        <td>{{$c->personita->nombre}} {{$c->personita->apellido}}</td>
                                        <td>{{ $c->personita->genero->nombre}}</td>
                                       <td>{{ $c->personita->celular}}</td>
                                       <td>{{ $c->personita->correo}}</td>
                                        <td>{{$c->nit}}.00 Bs</td>
                                        <td>{{$c->razonSocial}}</td>
                                        <td>{{ $c->personita->direccion}}</td>
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
