@extends('layouts.app')

@section('botones')
<div class="py-4  col-12 ml-5">
    <a href="/cliente" class="btn btn-danger mr-2">Volver</a>
</div>
@endsection


@section('content')

    <h2 class="text-center text-success mb-5 animate__backInDown animate__delay-1s">Informacion del clientes</h2>
   

    <div class="col-md-8 mx-auto bg-success p-3 justify-content-center" style="border-radius: 25px">
        
        <div class="col-md-6 col-6 mx-auto ">
           <h3 class="text-white">Rut: <br> {{$cliente->rut}}</h3>
        </div>
        <div class="col-md-6 col-6  mx-auto">
            <h3 class="text-white">Nombre:<br> {{$cliente->nombre}}</h3>
        </div>

        <div class="col-md-6 col-6  mx-auto">
            <h3 class="text-white">fecha de Nacimiento:<br> {{$cliente->fechaNacimiento}}</h3>
        </div>
       
        <div class="col-md-6 col-6  mx-auto">
            <h3 class="text-white">Nombre:<br> {{$cliente->genero}}</h3>
        </div>
        <div class="col-md-6 col-6  mx-auto">
            <h3 class="text-white">Genero:<br> {{$cliente->email}}</h3>
        </div>
        <div class="col-md-6 col-6  mx-auto">
            <h3 class="text-white">Telefono:<br> {{$cliente->phone}}</h3>
        </div>
        <div class="col-md-6 col-6  mx-auto">
            <h3 class="text-white">Dirreccion:<br> {{$cliente->dirreccion}}</h3>
        </div>
        <div class="col-md-6 col-6  mx-auto">
            <h3 class="text-white">Region:<br> {{$cliente->region}}</h3>
        </div>
        <div class="col-md-6 col-6  mx-auto">
            <h3 class="text-white">Comuna:<br> {{$cliente->comuna}}</h3>
        </div>
        

    </div>

@endsection
