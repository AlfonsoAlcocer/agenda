@extends('layouts.app')

@section('template_title')
Horarios Oficiales
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Horarios Oficiales') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('horarios-oficiales.create') }}"
                                class="btn btn-primary btn-sm float-right" data-placement="left">
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

                                    <th>Id Horariooficial</th>
                                    <th>Cuatrimestre Horario Oficial</th>
                                    <th>Id Modulo</th>
                                    <th>Descripcion Modulo</th>
                                    <th>Estado Horario</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($horariosOficiales as $horariosOficiale)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $horariosOficiale->id_horariooficial }}</td>
                                        <td>{{ $horariosOficiale->cuatrimestre_horario_oficial }}</td>
                                        <td>{{ $horariosOficiale->id_modulo }}</td>
                                        <td>{{ $horariosOficiale->descripcion_modulo }}</td>
                                        <td>{{ $horariosOficiale->estado_horario }}</td>

                                        <td>
                                            <form
                                                action="{{ route('horarios-oficiales.destroy', $horariosOficiale->id_horariooficial) }}"
                                                method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('horarios-oficiales.show', $horariosOficiale->id_horariooficial) }}"><i
                                                        class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('horarios-oficiales.edit', $horariosOficiale->id_horariooficial) }}"><i
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
            {!! $horariosOficiales->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection