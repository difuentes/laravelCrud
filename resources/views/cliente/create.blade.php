@extends('layouts.app')

@section('botones')
      <a href="/cliente" class="btn btn-danger mr-2">Volver</a>
@endsection

@section('content')
    <h2 class="text-center text-success mb-5 animate__backInDown animate__delay-1s">Agregar Clientes</h2>

    <div class="row justify-content-center">
        <div class="col-md-8">
     
            <form method="POST" novalidate action="{{action('App\\Http\\Controllers\\ClienteController@store')}}">
                @csrf
                <div class="form-group">
                    <label>Rut:</label>
                    <input  name="rut" class="form-control @error('rut') is-invalid @enderror " id="rut" placeholder="ejem: 12.345.678-9" />
                    @error('rut')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> 
                    @enderror
                </div> 
                <div class="form-group ">
                    <label>Nombre:</label>
                    <input  name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="ejem: Difuentes" />
                    @error('nombre')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span> 
                    @enderror
                </div>
                <div class="form-group">
                    <label>Fecha Nacimiento:</label>
                    <input  name="fechaNacimiento" class="form-control @error('fechaNacimiento') is-invalid @enderror" id="fechaNacimiento" placeholder="ejem: 31-05-1994" />
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
                    <input name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="ejem: 12.345.678-9" />
                    @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span> 
                    @enderror
                </div>
                <div class="form-group">
                    <label>Telefono:</label>
                    <input  name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="ejem: 936386995" />
                    @error('phone')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span> 
                    @enderror
                </div>
                <div class="form-group">
                    <label>Dirrecion:</label>
                    <input  name="dirreccion" class="form-control @error('dirreccion') is-invalid @enderror" id="dirreccion" placeholder="ejem: psj Volcan michi" />
                    @error('dirreccion')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span> 
                    @enderror
                </div>
                <div class="form-group">
                    <label>Region:</label>
                    <input  name="region" class="form-control @error('region') is-invalid @enderror"  id="region" placeholder="ejem: RM" />
                    @error('region')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span> 
                    @enderror
                </div>
                <div class="form-group">
                    <label>Comuna:</label>
                    <input name="comuna" class="form-control @error('comuna') is-invalid @enderror"  id="comuna" placeholder="ejem: Puente Alto" />
                    @error('comuna')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span> 
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-success btn-block" value="Agregar Cliente">
                </div>
                

            </form>
        </div>
    </div>

@endsection
