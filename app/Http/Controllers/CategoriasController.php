<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreCategoriasPost;
use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=Categorias::orderBy('created_at','desc')->cursorpaginate(5);
        echo view ('Dashboard.Categorias.index',['categorias'=> $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('Dashboard.Categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriasPost $request)
    {
        Categorias::create($request->validated());
        return redirect('categorias/create')->with('status','Muchas gracias la categoría fue creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorias=Categorias::find($id);
        return view ('Dashboard.Categorias.eliminate',compact('categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias=Categorias::find($id);
        return view ('Dashboard.Categorias.update',compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorias=Categorias::find($id);
        $categorias->nombre=$request->post('nombre');
        $categorias->estado=$request->post('estado');
        $categorias->save();

        return redirect('/categorias')->with('status','Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias=Categorias::find($id);
        $categorias->delete();

        return redirect('/categorias')->with('status','Eliminado con éxito');
    }
}
