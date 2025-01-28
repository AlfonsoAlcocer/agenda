@extends('layouts.app')
@section('content')

<div class="container w-70">

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Lunes</th>
                <th scope="col">Martes</th>
                <th scope="col">Miércoles</th>
                <th scope="col">Jueves</th>
                <th scope="col">Viernes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($horarioSemanal as $hora => $tiempo)
                <tr>
                    <th class="table-dark">{{ $hora }}</th>
                    @foreach (['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'] as $dia)  
                    <td>  
                        @if (isset($tiempo[$dia]))
                                <h5>{{'Prof. ' . $tiempo[$dia]->maestro->nombre_maestro. ' ' . $tiempo[$dia]->maestro->apellidos_maestro }}</h5>  
                                {{ $tiempo[$dia]->materia_modulo . ', ' . $tiempo[$dia]->grupo->nombre_grupo }}  
                        @endif  
                    </td>
                    @endforeach  
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
