<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\GruposUsuarios;
use Illuminate\Http\Request;

class GruposUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gruposusuarios = GruposUsuarios::all();
        return response()->json($gruposusuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gruposusuarios = new GruposUsuarios();
        $gruposusuarios-> id_empleado_fk=$request->id_empleado_fk;
        $gruposusuarios-> id_grupo_fk=$request->id_grupo_fk;

        $gruposusuarios->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gruposusuarios = GruposUsuarios::find($id);
        return $gruposusuarios;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gruposusuarios = GruposUsuarios::findOrfail($request->id);
        $gruposusuarios-> id_empleado_fk=$request->id_empleado_fk;
        $gruposusuarios-> id_grupo_fk=$request->id_grupo_fk;

        $gruposusuarios->save();
        return $gruposusuarios;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gruposusuarios=GruposUsuarios::destroy($id);
        return $gruposusuarios;
    }
}
