<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuarios::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Usuarios::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuarios::find($id);
        if ($usuario == null) {

            return response()->json(
                [
                    "resultado" => false,
                    "mensaje" => "usuario no encontrado"
                ],
                404
            );
        }
        return Usuarios::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuarios::find($id);
        if ($usuario == null) {

            return response()->json(
                [
                    "resultado" => false,
                    "mensaje" => "usuario no encontrado"
                ],
                404
            );
        }

        $usuario->update($request->all());
        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario=Usuarios::find($id);
        if ($usuario==null)
        {
            
            return response()->json(
               [ "resultado"=>false,
                "mensaje"=>"usuario no encontrado"
               ]
            ,404);
        }
        $usuario->delete();
        return $usuario;
    }
}
