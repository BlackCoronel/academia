@extends('admin.panel')

@section('content')
    <div class="container">
        <h3><i class="fa fa-user"></i> Listado de usuarios - Academia Cierva </h3>
        <table class="table table-striped">
            <thead>
            <tr style="background-color:black; color:white; font-weight: bold;">
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Email</th>
                <th scope="col">DNI</th>
                <th scope="col">Fecha nacimiento</th>
                <th scope="col">Domicilio</th>
                <th scope="col">A pagar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $campos)
                <tr>
                    <th scope="col w-75">{{ $campos->id }}</th>
                    <th scope="col">{{ $campos->nombre }}</th>
                    <th scope="col">{{ $campos->apellidos }}</th>
                    <th scope="col">{{ $campos->email }}</th>
                    <th scope="col">{{ $campos->dni }}</th>
                    <th scope="col">{{ $campos->fecha_nacimiento }}</th>
                    <th scope="col">{{ $campos->domicilio }}</th>
                    <th scope="col">{{ $campos->cuentas_pendientes . "€"}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

