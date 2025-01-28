@extends('layouts.app')

@section('template_title')
Notificaciones
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Notificaciones') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('notificaciones.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Nueva notificacion') }}
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

                                    <th>Numero Notificacion</th>
                                    <th>Emisor Notificacion</th>
                                    <th>Receptor Notificacion</th>
                                    <th>Descripcion Notificacion</th>
                                    <th>Estado Notificacion</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notificaciones as $notificacione)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $notificacione->id_notificacion }}</td>
                                        <td>{{ $notificacione->emisor }}</td>
                                        <td>{{ $notificacione->receptor }}</td>
                                        <td>{{ $notificacione->descripcion_notificacion }}</td>
                                        <td>{{ $notificacione->estado_notificacion }}</td>

                                        <td>
                                            <form
                                                action="{{ route('notificaciones.destroy', $notificacione->id_notificacion) }}"
                                                method="POST">
                                  
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('notificaciones.edit', $notificacione->id_notificacion) }}"><i
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
            {!! $notificaciones->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection