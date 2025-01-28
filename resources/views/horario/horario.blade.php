@extends('layouts.app')
@section('content')

<div class="container w-70">

    <table class="table table-bordered table-striped-columns">
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
                        @php  
                            // Define un array con los colores según el nombre del maestro  
                            $colores = [  
                                'Elayne' => 'text-danger',     
                                'Ulises' => 'text-primary',   
                                'Montalvo' => 'text-success',    
                                // Agrega más maestros según sea necesario  
                            ];  
                            // Obtiene el nombre completo del maestro  
                            $nombreCompleto = 'Prof. ' . $tiempo[$dia]->maestro->nombre_maestro . ' ' . $tiempo[$dia]->maestro->apellidos_maestro;  
                            // Cambia el color según el maestro  
                            $claseColor = $colores[$tiempo[$dia]->maestro->nombre_maestro] ?? 'text-body'; // color por defecto  
                        @endphp  
                        <h5 class="{{ $claseColor }}">{{ $nombreCompleto }}</h5>  
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
