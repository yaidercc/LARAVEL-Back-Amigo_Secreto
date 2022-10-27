<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados=Empleado::all();
        return response()->json($empleados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado=new Empleado();
        $empleado-> primer_nombre=$request->primer_nombre;
        $empleado-> segundo_nombre=$request->segundo_nombre;
        $empleado-> primer_apellido=$request->primer_apellido;
        $empleado-> segundo_apellido=$request->segundo_apellido;
        $empleado-> gustos=$request->gustos;
        $empleado-> disgustos=$request->disgustos;
        $empleado-> alergias=$request->alergias;

        $empleado->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);
        return $empleado;
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
        $empleado = Empleado::findOrfail($request->id);
        $empleado-> primer_nombre=$request->primer_nombre;
        $empleado-> segundo_nombre=$request->segundo_nombre;
        $empleado-> primer_apellido=$request->primer_apellido;
        $empleado-> segundo_apellido=$request->segundo_apellido;
        $empleado-> gustos=$request->gustos;
        $empleado-> disgustos=$request->disgustos;
        $empleado-> alergias=$request->alergias;
        $empleado->save();
        return $empleado;
;    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado=Empleado::destroy($id);
        return $empleado;
    }
}
