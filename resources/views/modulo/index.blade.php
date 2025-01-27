@extends('layouts.app')

@section('template_title')
Modulos
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Modulos') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('modulos.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-4">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th class="d-none">Id Modulo</th>
                                    <th>Maestro</th>
                                    <th>Grupo</th>
                                    <th>Dia</th>
                                    <th>Hora Inicio</th>
                                    <th>Hora Fin</th>
                                    <th>Materia</th>
                                    <th>Estado</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modulos as $modulo)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td class="d-none">{{ $modulo->id_modulo }}</td>
                                        <td>{{ $modulo->maestro }}</td>
                                        <td>{{ $modulo->grupo }}</td>
                                        <td>{{ $modulo->dia_modulo }}</td>
                                        <td>{{ $modulo->hora_inicio }}</td>
                                        <td>{{ $modulo->hora_fin }}</td>
                                        <td>{{ $modulo->materia_modulo }}</td>
                                        <td>{{ $modulo->estado_modulo == 1 ? 'Activo' : 'Inactivo' }}</td>


                                        <td>
                                            <form action="{{ route('modulos.destroy', $modulo->id_modulo) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('modulos.show', $modulo->id_modulo) }}"><i
                                                        class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('modulos.editar', $modulo->id_modulo) }}"><i
                                                        class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i
                                                        class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $modulos->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection