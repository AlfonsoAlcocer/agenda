<?php

namespace App\Http\Controllers;

use App\Models\HorariosOficiale;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\HorariosOficialeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
//solucion de la paginacion
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

use Carbon\Carbon;

class HorariosOficialeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $horariosOficiales = HorariosOficiale::orderBy('estado_horario', 'desc')->paginate();


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
            ->with('success', 'Horario creado exitosamente');
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
            ->with('success', 'Horario actualizado exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        HorariosOficiale::find($id)->delete();

        return Redirect::route('horarios-oficiales.index')
            ->with('success', 'Horario eliminado exitosamente ');
    }

    public function showHorario()
    {
        // $horario=HorariosOficiale::all();
        // return view('horario.horario', ['horarios'=> $horario]);

        // Obtenemos los horarios oficiales con los módulos relacionados
        // Obtener el inicio y fin de la semana actual
        $startOfWeek = Carbon::now()->startOfWeek(); // Lunes
        $endOfWeek = Carbon::now()->endOfWeek(); // Domingo

        // Filtrar los horarios dentro de la semana actual
        $horarios = HorariosOficiale::with(['modulo', 'modulo.maestro', 'modulo.grupo'])
            //->whereBetween('created_at', [$startOfWeek, $endOfWeek])
            ->get();

        // dd($horarios);

        // Crear la estructura del horario semanal
        $horarioSemanal = [
            '07:00:00 - 07:50:00' => [],
            '07:50:00 - 08:40:00' => [],
            '09:00:00 - 09:50:00' => [],
            '09:50:00 - 10:40:00' => [],
            '10:40:00 - 11:30:00' => [],
            '11:30:00 - 12:20:00' => [],
            '12:40:00 - 13:30:00' => [],
            '13:30:00 - 14:20:00' => [],
            '14:20:00 - 15:10:00' => [],
        ];

        // Poblar el horario con las clases
        foreach ($horarios as $horario) {
            $modulo = $horario->modulo;
            $dia = $modulo->dia_modulo; // Ejemplo: 'Lunes'
            $hora = $modulo->hora_inicio . ' - ' . $modulo->hora_fin;

            if (isset($horarioSemanal[$hora])) {
                $horarioSemanal[$hora][$dia] = $modulo;
            }
        }

        return view('horario.horario', [
            'horarioSemanal' => $horarioSemanal,
            'datos' => $horarios
        ]);

    }
}
