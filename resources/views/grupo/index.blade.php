@extends('layouts.app')

@section('template_title')
    Grupos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Grupos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('grupos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Grupo') }}
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
                                        
									<th >Numero de Grupo</th>
									<th >Nombre de Grupo</th>
									<th >Carrera de Grupo</th>
									<th >Num Alumnos</th>
									<th >Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grupos as $grupo)
                                        <tr>
                                            <td class="d-none">{{ ++$i }}</td>
                                            
										<td >{{ $grupo->id_grupo }}</td>
										<td >{{ $grupo->nombre_grupo }}</td>
										<td >{{ $grupo->carrera_grupo }}</td>
										<td >{{ $grupo->num_alumnos_grupo }}</td>
										<td >{{ $grupo->estado_grupo == 1 ? 'Activo' : 'Inactivo'  }}</td>

                                            <td>
                                                <form action="{{ route('grupos.destroy', $grupo->id_grupo) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('grupos.edit', $grupo->id_grupo) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Confirmar para eliminar') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $grupos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
