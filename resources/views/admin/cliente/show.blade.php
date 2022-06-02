{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Modal centered</button> --}}
<!-- Modal -->
{{-- <div class="modal fade" id="exampleModalCenter">
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
</div> --}}

@extends('layouts.admintemplate')
@section('contenido')
<div class="container">
    <div class="card">
        {{--  <div class="card-header">
            <center> <h4 class="card-title">NUEVO</h4></center>
        </div>  --}}
        <div class="card-body">
            <div class="basic-form">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nombre" id="nombre"  value="{{ $vcliente->nit }}" disabled >
                        {{--  <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>  --}}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
