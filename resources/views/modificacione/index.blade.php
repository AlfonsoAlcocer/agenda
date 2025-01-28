@extends('layouts.app')

@section('template_title')
Modificaciones
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Modificaciones') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('modificaciones.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Nueva modificacion') }}
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

                                    <th>numero de modificacion</th>
                                    <th>Numero de modulo</th>
                                    <th>Maestro</th>
                                    <th>Grupo</th>
                                    <th>Estado Modificacion</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modificaciones as $modificacione)
                                    <tr>
                                        <td class="d-none">{{ ++$i }}</td>

                                        <td>{{ $modificacione->id_modificacion }}</td>
                                        <td>{{ $modificacione->id_modulo }}</td>
                                        <td>{{ $modificacione->maestro }}</td>
                                        <td>{{ $modificacione->grupo }}</td>
                                        <td>{{ $modificacione->estado_modificacion == 1 ? 'Activo' : 'Inactivo' }}</td>

                                        <td>
                                            <form
                                                action="{{ route('modificaciones.destroy', $modificacione->id_modificacion) }}"
                                                method="POST">
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('modificaciones.edit', $modificacione->id_modificacion) }}"><i
                                                        class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="event.preventDefault(); confirm('Confirmar para eliminar') ? this.closest('form').submit() : false;"><i
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
            {!! $modificaciones->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection