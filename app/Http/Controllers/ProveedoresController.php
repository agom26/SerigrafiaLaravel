<?php


namespace App\Http\Controllers;
use App\Http\Requests\StoreProveedoresPost;
use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores=Proveedores::orderBy('created_at','desc')->cursorpaginate(5);
        echo view ('Dashboard.Proveedor.index',['proveedores'=> $proveedores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('Dashboard.Proveedor.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProveedoresPost $request)
    {
        Proveedores::create($request->validated());
        return redirect('proveedores/create')->with('status','Muchas gracias el proveedor fue creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedores=Proveedores::find($id);
        return view ('Dashboard.Proveedor.eliminate',compact('proveedores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $proveedores=Proveedores::find($id);
        return view ('Dashboard.Proveedor.update',compact('proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedores=Proveedores::find($id);
        $proveedores->nombre=$request->post('nombre');
        $proveedores->correo=$request->post('correo');
        $proveedores->telefono=$request->post('telefono');
        $proveedores->estado=$request->post('estado');
        $proveedores->save();

        return redirect('/proveedores')->with('status','Actualizado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedores=Proveedores::find($id);
        $proveedores->delete();

        return redirect('/proveedores')->with('status','Eliminado con éxito');
    }
}
