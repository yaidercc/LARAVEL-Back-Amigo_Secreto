<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AmigosSecretos;
use Illuminate\Http\Request;

class AmigosSecretosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amigosecreto=AmigosSecretos::all();
        return response()->json($amigosecreto);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $amigosecreto=new AmigosSecretos();
        $amigosecreto-> id_empleado_fk=$request->id_empleado_fk;
        $amigosecreto-> id_amigo_secreto=$request->id_amigo_secreto;

        $amigosecreto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $amigosecreto = AmigosSecretos::find($id);
        return $amigosecreto;
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
        $amigosecreto = AmigosSecretos::findOrfail($request->id);
        $amigosecreto-> id_empleado_fk=$request->id_empleado_fk;
        $amigosecreto-> id_amigo_secreto=$request->id_amigo_secreto;

        $amigosecreto->save();
        return $amigosecreto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $amigosecreto=AmigosSecretos::destroy($id);
        return $amigosecreto;
    }
}
