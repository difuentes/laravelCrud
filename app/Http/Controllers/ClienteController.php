<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cliente/index');
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cliente/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'rut'=>'required|min:11|max:12', 
            'nombre'=>'required|min:3',
            'fechaNacimiento'=>'required',
            'genero'=>'required',
            'email'=>'required|email',
            'phone'=>'numeric',
            'dirreccion'=>'required',
            'region'=>'required',
            'comuna'=>'required'
        ]);
        //insertar a BD
        DB::table('clientes')->insert([
            'rut'=>$data['rut'], 
            'nombre'=>$data['nombre'],
            'fechaNacimiento'=>$data['fechaNacimiento'],
            'genero'=>$data['genero'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'dirreccion'=>$data['dirreccion'],
            'region'=>$data['region'],
            'comuna'=>$data['comuna']
        ]);
        

        //redirreccionar
        return redirect()->action('App\\Http\\Controllers\\ClienteController@index');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
