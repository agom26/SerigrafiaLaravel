<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreClientesPost;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Clientes::orderBy('created_at','desc')->cursorpaginate(5);
        echo view ('Dashboard.Clientes.index',['clientes'=> $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('Dashboard.Clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientesPost $request)
    {
        Clientes::create($request->validated());
        return redirect('clientes/create')->with('status','Muchas gracias el cliente fue creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes=Clientes::find($id);
        return view ('Dashboard.Clientes.eliminate',compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes=Clientes::find($id);
        return view ('Dashboard.Clientes.update',compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $clientes=Clientes::find($id);
        $clientes->nombre=$request->post('nombre');
        $clientes->nit=$request->post('nit');
        $clientes->telefono=$request->post('telefono');
        $clientes->save();

        return redirect('/clientes')->with('status','Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes=Clientes::find($id);
        $clientes->delete();

        return redirect('/clientes')->with('status','Eliminado con éxito');
    }
}
