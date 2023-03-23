<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datosCalificaciones['calificaciones'] = Calificacion::paginate(15);
        return view('Calificacion.index', $datosCalificaciones);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Calificacion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosCalificaciones = request()->except('_token');

        Calificacion::insert($datosCalificaciones);
        return response() -> json($datosCalificaciones);
    }

    /**
     * Display the specified resource.
     */
    public function show(Calificacion $calificacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $calificacion=Calificacion::findOrFail($id);
        return view('Calificacion.edit',compact('calificacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosCalificaciones = request()->except(['_token', '_method']);

        Calificacion::where('id','=',$id)->update($datosCalificaciones);
        $calificacion=Calificacion::findOrFail($id);
        return view('Calificacion.edit',compact('calificacion'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $calificacion=Calificacion::findOrFail($id);

        Calificacion::destroy($id);

        return redirect('Calificacion');
    }
}
