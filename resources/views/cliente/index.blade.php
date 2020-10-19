@extends('layouts.app')

@section('botones')
      <a href="/cliente/create" class="btn btn-success mr-2"> Crear Cliente</a>
@endsection

@section('content')
    <h2 class="text-center text-success mb-5 animate__backInDown animate__delay-1s">Administrador de clientes</h2>

    <div class="col-md-12 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-success text-light">
                <tr>
                    <th scole="col">Rut</th>
                    <th scole="col">Nombre</th>
                    <th scole="col">Fecha nacimiento</th>
                    <th scole="col">Genero</th>
                    <th scole="col">Email</th>
                    <th scole="col">Telefono</th>
                    <th scole="col">Dirreccion</th>
                    <th scole="col">Region</th>
                    <th scole="col">Comuna</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>
                    <a href=" " class="btn btn-primary d-block">Ver</a>
                </td>
                <td>
                    <a href=" " class="btn btn-danger d-block mb-2">Editar</a>
                </td>

            </tbody>
        </table>

    </div>

@endsection
