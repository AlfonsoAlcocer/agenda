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
                                <a href="{{ route('maestros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Maestro</th>
									<th >Id Usuario</th>
									<th >Nombre Maestro</th>
									<th >Apellidos Maestro</th>
									<th >Idioma Maestro</th>
									<th >Estado Maestro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($maestros as $maestro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $maestro->id_maestro }}</td>
										<td >{{ $maestro->id_usuario }}</td>
										<td >{{ $maestro->nombre_maestro }}</td>
										<td >{{ $maestro->apellidos_maestro }}</td>
										<td >{{ $maestro->idioma_maestro }}</td>
										<td >{{ $maestro->estado_maestro }}</td>

                                            <td>
                                                <form action="{{ route('maestros.destroy', $maestro->id_maestro) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('maestros.show', $maestro->id_maestro) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('maestros.edit', $maestro->id_maestro) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $maestros->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
