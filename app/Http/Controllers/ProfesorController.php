<?php

namespace App\Http\Controllers;

use App\Models\Profesores;
use App\Http\Requests\ProfesoresRequest;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesor = Profesores::all();

        return $profesor;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Profesores::create($request->all());

        return response()->json(" Creación exitosa", 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return response()->json(new ProfesoresResource($id), 201);

        $profesor = Profesores::find($id);

        return $profesor;
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
        $profesores = Profesores::find($id);

        $profesores->fill($request->all());

        $profesores->save();

        return response()->json("Actualización Exitosa");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesores = Profesores::find($id);

        if ($profesores) {
            $profesores->delete();

            return response()->json("Eliminación Exitosa");
        } else {
            return response()->json("ID inexistente");
        }
    }
}