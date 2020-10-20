@extends('layouts.app')

@section('botones')
    <div class=" mt-5 col-12 ml-5">
        <a href="/cliente" class="btn btn-danger mr-2">volver</a>
    </div>
      
@endsection

@section('content')

    <h2 class="text-center text-success mb-5 animate__backInDown animate__delay-1s">Editar cliente : {{$cliente->rut}}</h2>
    <div class="col-md-6 mx-auto bg-white p-3">
        <form method="POST" novalidate action="{{action('App\\Http\\Controllers\\ClienteController@update',['cliente'=> $cliente->id])}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label>Rut:</label>
                <input value="{{ $cliente->rut }}"  name="rut" class="form-control @error('rut') is-invalid @enderror " id="rut" placeholder="ejem: 12.345.678-9" />
                @error('rut')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span> 
                @enderror
            </div> 
            <div class="form-group ">
                <label>Nombre:</label>
                <input value="{{ $cliente->nombre }}"  name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="ejem: Difuentes" />
                @error('nombre')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span> 
                @enderror
            </div>
            <div class="form-group">
                <label>Fecha Nacimiento:</label>
                <input value="{{ $cliente->fechaNacimiento }}" name="fechaNacimiento" class="form-control @error('fechaNacimiento') is-invalid @enderror" id="fechaNacimiento" placeholder="ejem: 31-05-1994" />
                @error('fechaNacimiento')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span> 
                @enderror
            </div>
            <div class="form-group">
                <label>Genero</label>
                <div class="form-check">
                    
                    <input  class="form-check-input " type="radio" name="genero" id="rbtmasculino" value="masculino" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Masculino
                    </label>
                  </div>
                  <div class="form-check">
                    <input  class="form-check-input " type="radio" name="genero" id="rbtfemenino" value="femenino">
                    <label class="form-check-label" for="exampleRadios2">
                      Femenino
                    </label>
                  </div>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input value="{{ $cliente->email }}" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="ejem: 12.345.678-9" />
                @error('email')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span> 
                @enderror
            </div>
            <div class="form-group">
                <label>Telefono:</label>
                <input value="{{ $cliente->phone }}" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="ejem: 936386995" />
                @error('phone')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span> 
                @enderror
            </div>
            <div class="form-group">
                <label>Dirrecion:</label>
                <input value="{{ $cliente->dirreccion }}" name="dirreccion" class="form-control @error('dirreccion') is-invalid @enderror" id="dirreccion" placeholder="ejem: psj Volcan michi" />
                @error('dirreccion')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span> 
                @enderror
            </div>
            <div class="form-group">
                <label>Region:</label>
                <input value="{{ $cliente->region }}" name="region" class="form-control @error('region') is-invalid @enderror"  id="region" placeholder="ejem: RM" />
                @error('region')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span> 
                @enderror
            </div>
            <div class="form-group">
                <label>Comuna:</label>
                <input value="{{ $cliente->comuna }}" name="comuna" class="form-control @error('comuna') is-invalid @enderror"  id="comuna" placeholder="ejem: Puente Alto" />
                @error('comuna')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span> 
                @enderror
            </div>
            <div class="form-group">
                <input type="submit"  class="btn btn-success btn-block" value="Editar Cliente">
            </div>
        </form>
    </div>
@endsection
