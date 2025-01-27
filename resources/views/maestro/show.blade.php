@extends('layouts.app')

@section('template_title')
    {{ $maestro->name ?? __('Show') . " " . __('Maestro') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Maestro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('maestros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Maestro:</strong>
                                    {{ $maestro->id_maestro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Usuario:</strong>
                                    {{ $maestro->id_usuario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Maestro:</strong>
                                    {{ $maestro->nombre_maestro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellidos Maestro:</strong>
                                    {{ $maestro->apellidos_maestro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idioma Maestro:</strong>
                                    {{ $maestro->idioma_maestro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Maestro:</strong>
                                    {{ $maestro->estado_maestro }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
