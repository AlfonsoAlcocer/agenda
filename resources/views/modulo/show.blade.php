@extends('layouts.app')

@section('template_title')
    {{ $modulo->name ?? __('Show') . " " . __('Modulo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Modulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('modulos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Modulo:</strong>
                                    {{ $modulo->id_modulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Maestro:</strong>
                                    {{ $modulo->id_maestro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Grupo:</strong>
                                    {{ $modulo->id_grupo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Dia Modulo:</strong>
                                    {{ $modulo->dia_modulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora Inicio:</strong>
                                    {{ $modulo->hora_inicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora Fin:</strong>
                                    {{ $modulo->hora_fin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Materia Modulo:</strong>
                                    {{ $modulo->materia_modulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Modulo:</strong>
                                    {{ $modulo->estado_modulo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
