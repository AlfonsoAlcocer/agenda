<?php

namespace App\Http\Controllers;

use App\Models\Solicitude;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SolicitudeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Maestro;

//solucion de la paginacion
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class SolicitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $solicitudes = Solicitude::with('maestro')
            ->orderByRaw("FIELD(estado_solicitud, 'Pendiente', 'Aprobada', 'Rechazada')")
            ->paginate();

        return view('solicitude.index', compact('solicitudes'))
            ->with('i', ($request->input('page', 1) - 1) * $solicitudes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $solicitude = new Solicitude();
        $maestros = Maestro::select('id_maestro', 'nombre_maestro', 'apellidos_maestro')
            ->where('estado_maestro', 1)
            ->get();



        return view('solicitude.create', compact('solicitude', 'maestros'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(SolicitudeRequest $request): RedirectResponse
    {
        Solicitude::create($request->validated());

        return Redirect::route('solicitudes.index')
            ->with('success', 'Solicitud creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $solicitude = Solicitude::find($id);

        return view('solicitude.show', compact('solicitude'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $solicitude = Solicitude::find($id);
        
        $maestros = Maestro::select('id_maestro', 'nombre_maestro', 'apellidos_maestro')
            ->where('estado_maestro', 1)
            ->get();

        return view('solicitude.edit', compact('solicitude', 'maestros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SolicitudeRequest $request, Solicitude $solicitude): RedirectResponse
    {
        $solicitude->update($request->validated());

        return Redirect::route('solicitudes.index')
            ->with('success', 'Solicitud actualizada exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        Solicitude::find($id)->delete();

        return Redirect::route('solicitudes.index')
            ->with('success', 'Solicitud eliminada exitosamente');
    }
}
