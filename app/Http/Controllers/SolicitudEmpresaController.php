<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolicitudEmpresaModel;

class SolicitudEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$solicitudes = SolicitudEmpresaModel::select('*')->get();
        $solicitudes = SolicitudEmpresaModel::select('Solicitud_Empresa.*', 'Oportunidad.nombreProyecto')
    ->join('Solicitud', 'Solicitud_Empresa.Id_Solicitud', '=', 'Solicitud.Id_Solicitud')
    ->join('Oportunidad_Validador', 'Solicitud.Id_OportunidadValidador', '=', 'Oportunidad_Validador.Id_OportunidadValidador')
    ->join('Oportunidad', 'Oportunidad_Validador.Id_Oportunidad', '=', 'Oportunidad.Id_Oportunidad')
    ->get();

        return view('Aspirantes.index',compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
