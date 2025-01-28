<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ModuloRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Maestro;
use App\Models\Grupo;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $modulos = Modulo::paginate();

        $maestros = Maestro::select('id_maestro', 'nombre_maestro', 'apellidos_maestro')->get();

        return view('modulo.index', compact('modulos','maestros'))
            ->with('i', ($request->input('page', 1) - 1) * $modulos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $modulo = new Modulo();
        $maestros = Maestro::select('id_maestro', 'nombre_maestro', 'apellidos_maestro')->get();
        $grupos = Grupo::select('id_grupo', 'nombre_grupo', 'carrera_grupo')->get();

        return view('modulo.create', compact('modulo','maestros','grupos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModuloRequest $request): RedirectResponse
    {
        Modulo::create($request->validated());

        return Redirect::route('modulos.index.nuevo')
            ->with('success', 'Modulo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $modulo = Modulo::find($id);

        return view('modulo.show', compact('modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $modulo = Modulo::find($id);

        return view('modulo.edit', compact('modulo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModuloRequest $request, Modulo $modulo): RedirectResponse
    {
        $modulo->update($request->validated());

        return Redirect::route('modulos.index.nuevo')
            ->with('success', 'Modulo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Modulo::find($id)->delete();

        return Redirect::route('modulos.index')
            ->with('success', 'Modulo deleted successfully');
    }

    public function indexnuevo(Request $request): View
    {
        // Obtener los módulos paginados
        $modulos = Modulo::paginate();

        // Añadir manualmente el maestro a cada módulo
        foreach ($modulos as $modulo) {
            $maestro = Maestro::find($modulo->id_maestro); // Buscar maestro por ID
            $modulo->maestro = $maestro ? $maestro->nombre_maestro . ' ' . $maestro->apellidos_maestro : 'Sin asignar';
        }
        foreach ($modulos as $modulo) {
            $grupo = Grupo::find($modulo->id_grupo); // Buscar maestro por ID
            $modulo->grupo = $grupo ? $grupo->nombre_grupo. ' ' . $grupo->carrera_grupo : 'Sin asignar';
        }

        // Calcular el índice para paginación
        $i = ($request->input('page', 1) - 1) * $modulos->perPage();

        return view('modulo.index', compact('modulos', 'i'));
    }
    public function editar($id): View
    {
        $modulo = Modulo::find($id);
        // Obtener todos los maestros con sus IDs y nombres
        $maestros = Maestro::select('id_maestro', 'nombre_maestro', 'apellidos_maestro')->get();
        $grupos = Grupo::select('id_grupo', 'nombre_grupo', 'carrera_grupo')->get();

        return view('modulo.edit', compact('modulo', "maestros", 'grupos'));
    }
}
