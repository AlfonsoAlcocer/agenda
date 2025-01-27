<?php

namespace App\Http\Controllers;

use App\Models\Modificacione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ModificacioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ModificacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $modificaciones = Modificacione::paginate();

        return view('modificacione.index', compact('modificaciones'))
            ->with('i', ($request->input('page', 1) - 1) * $modificaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $modificacione = new Modificacione();

        return view('modificacione.create', compact('modificacione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModificacioneRequest $request): RedirectResponse
    {
        Modificacione::create($request->validated());

        return Redirect::route('modificaciones.index')
            ->with('success', 'Modificacione created successfully.');
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

        return view('modificacione.edit', compact('modificacione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModificacioneRequest $request, Modificacione $modificacione): RedirectResponse
    {
        $modificacione->update($request->validated());

        return Redirect::route('modificaciones.index')
            ->with('success', 'Modificacione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Modificacione::find($id)->delete();

        return Redirect::route('modificaciones.index')
            ->with('success', 'Modificacione deleted successfully');
    }
}
