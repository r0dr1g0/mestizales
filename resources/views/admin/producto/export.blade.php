<!DOCTYPE html>
<html lang="es">

<head>
    {{-- <link href="{{asset ('plantillaadmin/focus/css/style.css') }}" rel="stylesheet"> --}}
</head>

<div class="alert alert-danger">Alerta</div>
<body>
    <table class="table table-bordered table-striped">
        {{-- <table id="row-select" class="display table table-borderd table-hover"> --}}
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Clasificacion</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Fecha de creacion</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($vproducto as $p)
                <tr role="row " class="odd">
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->categoriaproducto->nombre }}</td>
                    <td>{{ $p->clasificacionproducto->nombre }}</td>
                    <td>{{ $p->precio }}.00 Bs</td>
                    <td>{{ $p->descripcion }}</td>
                    <td>{{ $p->created_at }}</td>
                </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                <th>id</th>
                <th>Categoria</th>
                <th>Clasificacion</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Fecha de creacion</th>
            </tr>
        </tfoot>
    </table>
</body>

</html>
