@extends('layouts.app')

@section('template_title')
    Solicitudes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Solicitudes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('solicitudes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Solicitud</th>
									<th >Emisor Solicitudes</th>
									<th >Id Modulo</th>
									<th >Estado Solicitud</th>
									<th >Descripcion Solicitud</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($solicitudes as $solicitude)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
<<<<<<< HEAD
										<td >{{ $solicitude->id_solicitud }}</td>
										<td >{{ $solicitude->maestro?->nombre_maestro}} {{ $solicitude->maestro->apellidos_maestro }}</td>
=======
                                            <td >{{ $solicitude->maestro?->nombre_maestro}} {{ $solicitude->maestro->apellidos_maestro }}</td>
										<td >{{ $solicitude->emisor_solicitudes }}</td>
>>>>>>> 0362f73b1f4fb0f836361c0b01536097611ffa30
										<td >{{ $solicitude->id_modulo }}</td>
										<td >{{ $solicitude->estado_solicitud }}</td>
										<td >{{ $solicitude->descripcion_solicitud }}</td>

                                            <td>
                                                <form action="{{ route('solicitudes.destroy', $solicitude->id_solicitud) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('solicitudes.show', $solicitude->id_solicitud) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('solicitudes.edit', $solicitude->id_solicitud) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $solicitudes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
