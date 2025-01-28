@extends('layouts.app')

@section('template_title')
Maestros
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Maestros') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('maestros.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Nuevo Maestro') }}
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
                                    <th class="d-none">No</th>

                                    <th>Numero de Maestro</th>
                                    <th>Usuario relacionado</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Idioma</th>
                                    <th>Estado</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($maestros as $maestro)
                                    <tr>
                                        <td class="d-none">{{ ++$i }}</td>

                                        <td>{{ $maestro->id_maestro }}</td>
                                        <td>{{ $maestro->id_usuario }}</td>
                                        <td>{{ $maestro->nombre_maestro }}</td>
                                        <td>{{ $maestro->apellidos_maestro }}</td>
                                        <td>{{ $maestro->idioma_maestro }}</td>
                                        <td>{{ $maestro->estado_maestro == 1 ? 'Activo' : 'Inactivo' }}</td>

                                        <td>
                                            <form action="{{ route('maestros.destroy', $maestro->id_maestro) }}"
                                                method="POST">
                                                
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('maestros.edit', $maestro->id_maestro) }}"><i
                                                        class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="event.preventDefault(); confirm('Confirme si desea eliminar.') ? this.closest('form').submit() : false;"><i
                                                        class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $maestros->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection