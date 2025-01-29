<?php

namespace App\Http\Controllers;

use App\Models\HistorialHorario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\HistorialHorarioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

//solucion de la paginacion
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class HistorialHorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        

        $historialHorarios = HistorialHorario::paginate();

        return view('historial-horario.index', compact('historialHorarios'))
            ->with('i', ($request->input('page', 1) - 1) * $historialHorarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $historialHorario = new HistorialHorario();

        return view('historial-horario.create', compact('historialHorario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HistorialHorarioRequest $request): RedirectResponse
    {
        HistorialHorario::create($request->validated());

        return Redirect::route('historial-horarios.index')
            ->with('success', 'Historial creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $historialHorario = HistorialHorario::find($id);

        return view('historial-horario.show', compact('historialHorario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $historialHorario = HistorialHorario::find($id);

        return view('historial-horario.edit', compact('historialHorario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HistorialHorarioRequest $request, HistorialHorario $historialHorario): RedirectResponse
    {
        $historialHorario->update($request->validated());

        return Redirect::route('historial-horarios.index')
            ->with('success', 'Historial actualizado exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        HistorialHorario::find($id)->delete();

        return Redirect::route('historial-horarios.index')
            ->with('success', 'Historial eliminado exitosamente');
    }
}
