<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreRolesPost;
use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Roles::orderBy('created_at','desc')->cursorpaginate(5);
        echo view ('Dashboard.Roles.index',['roles'=> $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('Dashboard.Roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolesPost $request)
    {
        Roles::create($request->validated());
        return redirect('roles/create')->with('status','Muchas gracias el rol fue creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roles=Roles::find($id);
        return view ('Dashboard.Roles.eliminate',compact('roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles=Roles::find($id);
        return view ('Dashboard.Roles.update',compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $roles=Roles::find($id);
        $roles->nombre=$request->post('nombre');
        $roles->save();

        return redirect('/roles')->with('status','Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roles=Roles::find($id);
        $roles->delete();

        return redirect('/roles')->with('status','Eliminado con éxito');
    }
}
