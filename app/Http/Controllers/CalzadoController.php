<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calzado;

class CalzadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calzados = Calzado::all();
        return $calzados;
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
        $calzado = new Calzado();
        $calzado->tenis = $request->tenis;
        $calzado->precio = $request->precio;
        $calzado->numero = $request->numero;

        $calzado->save();
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $articulo = Calzado::findOrFail($request->id);
        $calzado->tenis = $request->tenis;
        $calzado->precio = $request->precio;
        $calzado->numero = $request->numero;

        $calzado->save();

        return $calzado;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $calzado = Calzado::destroy($request->id);
        return $calzado;
    }
}
