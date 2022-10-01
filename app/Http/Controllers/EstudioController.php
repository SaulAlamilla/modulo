<?php

namespace App\Http\Controllers;

use App\Models\Estudio;
use Illuminate\Http\Request;

class EstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudios = Estudio::orderByDesc('id')->get();
        return view('estudio.index', compact('estudios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'nombre' => 'required|max:60',
                'objetivo' => 'required|max:255',
                'objetivos_especificos' => 'required|max:255',
                'especificacion_mercado' => 'required|max:255',
            ]);
        $estudio = Estudio::create( $datos );
        return redirect()->route('estudio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function show(Estudio $estudio)
    {
        return view('estudio.concepts');
    }

    public function polls(Estudio $estudio)
    {
        return view('estudio.polls');
    }

    public function data(Estudio $estudio)
    {
        return view('estudio.data');
    }

    public function results(Estudio $estudio)
    {
        return view('estudio.results');
    }

    public function conclusion(Estudio $estudio)
    {
        return view('estudio.conclusion');
    }
    public function print(Estudio $estudio)
    {
        return view('estudio.print');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudio $estudio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudio $estudio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudio $estudio)
    {
        //
    }
}
