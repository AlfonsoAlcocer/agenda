@extends('layouts.app')

@section('template_title')
    {{ $historialHorario->name ?? __('Show') . " " . __('Historial Horario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historial Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('historial-horarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Historial:</strong>
                                    {{ $historialHorario->id_historial }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cuatrimestre Horario:</strong>
                                    {{ $historialHorario->cuatrimestre_horario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Modulo:</strong>
                                    {{ $historialHorario->id_modulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion Modulo:</strong>
                                    {{ $historialHorario->descripcion_modulo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
