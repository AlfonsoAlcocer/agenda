<?php

namespace App\Http\Controllers;

use App\Models\Modificacione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ModificacioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use App\Models\Maestro;
use App\Models\Grupo;
class ModificacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $modificaciones = Modificacione::paginate();
        foreach ($modificaciones as $modificacione) {
            $maestro = Maestro::find($modificacione->id_maestro); 
            $modificacione->maestro = $maestro ? $maestro->nombre_maestro . ' ' . $maestro->apellidos_maestro : 'Sin asignar';
        }
        foreach ($modificaciones as $modificacione) {
            $grupo = Grupo::find($modificacione->id_grupo); 
            $modificacione->grupo = $grupo ? $grupo->nombre_grupo. ' ' . $grupo->carrera_grupo : 'Sin asignar';
        }

        return view('modificacione.index', compact('modificaciones'))
            ->with('i', ($request->input('page', 1) - 1) * $modificaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $modificacione = new Modificacione();
        $maestros = Maestro::select('id_maestro', 'nombre_maestro', 'apellidos_maestro')->get();
        $grupos = Grupo::select('id_grupo', 'nombre_grupo', 'carrera_grupo')->get();

        return view('modificacione.create', compact('modificacione','maestros','grupos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModificacioneRequest $request): RedirectResponse
    {
        Modificacione::create($request->validated());

        return Redirect::route('modificaciones.index')
            ->with('success', 'Modificacion creada');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $modificacione = Modificacione::find($id);

        return view('modificacione.show', compact('modificacione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $modificacione = Modificacione::find($id);
        $maestros = Maestro::select('id_maestro', 'nombre_maestro', 'apellidos_maestro')->get();
        $grupos = Grupo::select('id_grupo', 'nombre_grupo', 'carrera_grupo')->get();

        return view('modificacione.edit', compact('modificacione',"maestros","grupos"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModificacioneRequest $request, Modificacione $modificacione): RedirectResponse
    {
        $modificacione->update($request->validated());

        return Redirect::route('modificaciones.index')
            ->with('success', 'Modificacion actualizada');
    }

    public function destroy($id): RedirectResponse
    {
        Modificacione::find($id)->delete();

        return Redirect::route('modificaciones.index')
            ->with('success', 'Modificacion eliminada');
    }
}
