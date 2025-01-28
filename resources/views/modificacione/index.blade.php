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

                                    <th>Id Modificacion</th>
                                    <th>Id Modulo</th>
                                    <th>Id Maestro</th>
                                    <th>Id Grupo</th>
                                    <th>Estado Modificacion</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modificaciones as $modificacione)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $modificacione->id_modificacion }}</td>
                                        <td>{{ $modificacione->id_modulo }}</td>
                                        <td>{{ $modificacione->id_maestro }}</td>
                                        <td>{{ $modificacione->id_grupo }}</td>
                                        <td>{{ $modificacione->estado_modificacion == 1 ? 'Activo' : 'Inactivo' }}</td>

                                        <td>
                                            <form
                                                action="{{ route('modificaciones.destroy', $modificacione->id_modificacion) }}"
                                                method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('modificaciones.show', $modificacione->id_modificacion) }}"><i
                                                        class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('modificaciones.edit', $modificacione->id_modificacion) }}"><i
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
            {!! $modificaciones->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection