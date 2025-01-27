<?php

namespace App\Http\Controllers;

use App\Models\HorariosOficiale;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\HorariosOficialeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HorariosOficialeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $horariosOficiales = HorariosOficiale::paginate();

        return view('horarios-oficiale.index', compact('horariosOficiales'))
            ->with('i', ($request->input('page', 1) - 1) * $horariosOficiales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $horariosOficiale = new HorariosOficiale();

        return view('horarios-oficiale.create', compact('horariosOficiale'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HorariosOficialeRequest $request): RedirectResponse
    {
        HorariosOficiale::create($request->validated());

        return Redirect::route('horarios-oficiales.index')
            ->with('success', 'HorariosOficiale created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $horariosOficiale = HorariosOficiale::find($id);

        return view('horarios-oficiale.show', compact('horariosOficiale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $horariosOficiale = HorariosOficiale::find($id);

        return view('horarios-oficiale.edit', compact('horariosOficiale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HorariosOficialeRequest $request, HorariosOficiale $horariosOficiale): RedirectResponse
    {
        $horariosOficiale->update($request->validated());

        return Redirect::route('horarios-oficiales.index')
            ->with('success', 'HorariosOficiale updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        HorariosOficiale::find($id)->delete();

        return Redirect::route('horarios-oficiales.index')
            ->with('success', 'HorariosOficiale deleted successfully');
    }
}
