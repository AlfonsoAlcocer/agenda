@extends('layouts.app')

@section('template_title')
    {{ $horariosOficiale->name ?? __('Show') . " " . __('Horarios Oficiale') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Horarios Oficiale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('horarios-oficiales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Horariooficial:</strong>
                                    {{ $horariosOficiale->id_horariooficial }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cuatrimestre Horario Oficial:</strong>
                                    {{ $horariosOficiale->cuatrimestre_horario_oficial }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Modulo:</strong>
                                    {{ $horariosOficiale->id_modulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion Modulo:</strong>
                                    {{ $horariosOficiale->descripcion_modulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Horario:</strong>
                                    {{ $horariosOficiale->estado_horario }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
