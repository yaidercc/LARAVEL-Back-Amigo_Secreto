<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Grupos;
use Illuminate\Http\Request;

class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos=Grupos::all();
        return response()->json($grupos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupos=new Grupos();
        $grupos-> id_lider_fk=$request->id_lider_fk;
        $grupos-> descubrimiento=$request->descubrimiento;
        $grupos-> estado=$request->estado;

        $grupos->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupos = Grupos::find($id);
        return $grupos;
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
        $grupos = Grupos::findOrfail($request->id);
        $grupos-> id_empleado_fk=$request->id_empleado_fk;
        $grupos-> id_amigo_secreto=$request->id_amigo_secreto;

        $grupos->save();
        return $grupos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupos=Grupos::destroy($id);
        return $grupos;
    }
}
