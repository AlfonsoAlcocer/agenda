<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MaestroRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $maestros = Maestro::paginate();

        return view('maestro.index', compact('maestros'))
            ->with('i', ($request->input('page', 1) - 1) * $maestros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $maestro = new Maestro();

        return view('maestro.create', compact('maestro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MaestroRequest $request): RedirectResponse
    {
        Maestro::create($request->validated());

        return Redirect::route('maestros.index')
            ->with('success', 'Maestro Creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $maestro = Maestro::find($id);

        return view('maestro.show', compact('maestro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $maestro = Maestro::find($id);

        return view('maestro.edit', compact('maestro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MaestroRequest $request, Maestro $maestro): RedirectResponse
    {
        $maestro->update($request->validated());

        return Redirect::route('maestros.index')
            ->with('success', 'Maestro actualizado exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        Maestro::find($id)->delete();

        return Redirect::route('maestros.index')
            ->with('success', 'Maestro Eliminado exitosamente');
    }
}
