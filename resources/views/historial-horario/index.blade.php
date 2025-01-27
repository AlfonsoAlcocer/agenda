@extends('layouts.app')

@section('template_title')
    Historial Horarios
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historial Horarios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('historial-horarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Historial</th>
									<th >Cuatrimestre Horario</th>
									<th >Id Modulo</th>
									<th >Descripcion Modulo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historialHorarios as $historialHorario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $historialHorario->id_historial }}</td>
										<td >{{ $historialHorario->cuatrimestre_horario }}</td>
										<td >{{ $historialHorario->id_modulo }}</td>
										<td >{{ $historialHorario->descripcion_modulo }}</td>

                                            <td>
                                                <form action="{{ route('historial-horarios.destroy', $historialHorario->id_historial) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('historial-horarios.show', $historialHorario->id_historial) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historial-horarios.edit', $historialHorario->id_historial) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $historialHorarios->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
