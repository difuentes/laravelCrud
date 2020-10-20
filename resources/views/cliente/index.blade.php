@extends('layouts.app')

@section('botones')
    <div class="py-4 mt-5 col-12 ml-5">
        <a href="/cliente/create" class="btn btn-success mr-2"> Crear Cliente</a>
    </div>
      
@endsection

@section('content')
    <h2 class="text-center text-success mb-5 animate__backInDown animate__delay-1s">Administrador de clientes</h2>
    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table table-bordered">
            <thead class="bg-success text-light">
                <tr>
                    <th scole="col">Rut</th>
                    <th scole="col">Nombre</th>
                    <th scole="col">Email</th>
                    <th scole="col">Telefono</th>
                    <th scole="col">Dirreccion</th>
                    <th class="text-center"><i class="fas fa-eye "></i></th>
                    <th class="text-center"><i class="fas fa-pen "></i></th>
                    <th class="text-center"><i class="fas fa-trash "></i></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($cliente as $cliente)
                <tr>
                    <td> {{$cliente->rut}} </td>
                    <td> {{$cliente->nombre}} </td>
                    <td> {{$cliente->email}} </td>
                    <td> {{$cliente->phone}} </td>
                    <td> {{$cliente->dirreccion}} </td>
                    <td>
                       
                        <a href="/cliente/{{$cliente->id }}" class="btn btn-success d-block">Ver</a>
                    </td>
                    <td>
                        <a href="/cliente/{{$cliente->id}}/edit" class="btn btn-warning d-block mb-2">Editar</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger d-block mb-2">Eliminar</a>
                    </td>
                </tr>
           
            @endforeach


            </tbody>
        </table>

    </div>

@endsection
