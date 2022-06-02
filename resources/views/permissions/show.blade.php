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
                        <input type="text" class="form-control" name="name" id="name"  value="{{ $vpermission->name }}" disabled >
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
