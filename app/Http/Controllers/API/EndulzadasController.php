<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Endulzadas;
use Illuminate\Http\Request;

class EndulzadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $endulzada = Endulzadas::all();
        return response()->json($endulzada);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $endulzada=new Endulzadas();
        $endulzada-> fecha_endulzadas=$request->fecha_endulzadas;
        $endulzada-> lugar_endulzada=$request->lugar_endulzada;
        $endulzada-> id_grupo_fk=$request->id_grupo_fk;

        $endulzada->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
