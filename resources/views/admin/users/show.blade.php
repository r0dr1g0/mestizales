@extends('layouts\admintemplate')
@section('contenido')
<div class="container">

</div>
<div class="row">
    <div class="col-lg-12">
        <div class="profile">
            <div class="profile-head">
                <div class="photo-content">
                    <div class="cover-photo"></div>
                    <div class="profile-photo">
                        <img src="{{ asset('plantillaadmin/focus/images/profile/profile.png') }}" class="img-fluid rounded-circle" alt="">
                    </div>
                </div>
                <div class="profile-info">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                    <div class="profile-name">
                                        <h4 class="text-primary">{{ $vusers->personita->nombre }} {{ $vusers->personita->apellido }}</h4>
                                        <p>{{ $vusers->username }}</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                    <div class="profile-email">
                                        <h4 class="text-muted">{{ $vusers->email }}</h4>
                                        <p>Correo Electronico</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                    @forelse($vusers->roles  as  $permission)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-sm-1">
                                                    <span class="badge badge-info">{{ $permission->name }}</span>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    @empty
                                        <span class="badge  badge-rounded badge-outline-danger">Sin permisos</span>
                                    @endforelse
                                </div>
                                <!-- <div class="col-xl-4 col-sm-4 prf-col">
                                    <div class="profile-call">
                                        <h4 class="text-muted">(+1) 321-837-1030</h4>
                                        <p>Phone No.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
